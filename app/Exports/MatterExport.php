<?php

namespace App\Exports;

use App\Matter;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class MatterExport implements FromCollection, WithHeadings, WithEvents
{

    public $id;
    public $totalAmount = 0;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function collection()
    {
        $matters = Matter::findOrFail($this->id);
        $rows = collect();

        $sortedTimeManagement = $matters->timemanagement->sortBy('date');

        foreach ($sortedTimeManagement as $time) {
            $amount = $time->amount;
            $this->totalAmount += $amount;

            $rows->push([
                date('d-m-Y', strtotime($time->date)),
                $time->activity_detail ? ucwords($time->activity_detail->title) : '',
                $time->description,
                $time->activity_detail ? $time->activity_detail->price : '',
                $time->units,
                $amount,
                $time->user_detail ? ucwords($time->user_detail->name) : '',
            ]);
        }

        return $rows;
    }

    public function headings(): array
    {
        return [
            'Date',
            'Activity',
            'Billing Description',
            'Rates',
            'Units',
            'Amount',
            'Fee Earner',
        ];
    }

    public function registerEvents(): array
    {   
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheet = $event->sheet;
                $lastRow = $sheet->getHighestRow() + 1;

                $sheet->getStyle('A1:G1')->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'size' => 13,
                    ],
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ],
                ]);

                $sheet->getStyle("A2:G" . ($lastRow - 1))->applyFromArray([
                    'font' => [
                        'size' => 12,
                    ],
                ]);

                $sheet->setCellValue("A{$lastRow}", 'Work in progress total:');
                $sheet->mergeCells("A{$lastRow}:E{$lastRow}");
                $sheet->setCellValue("F{$lastRow}", $this->totalAmount);

                $sheet->getStyle("A{$lastRow}:G{$lastRow}")->applyFromArray([
                    'fill' => [
                        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                        'color' => ['rgb' => '92D050'],
                    ],
                    'font' => [
                        'bold' => true,
                        'size' => 13,
                    ],
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                    ],
                ]);
            },
        ];
    }
}
