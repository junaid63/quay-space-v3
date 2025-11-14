@extends('layouts/master')

@section('title')
Service
@stop

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
<link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
@stop

@section('js')
<script src="{{ url('backend/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dt_ajax_table = document.querySelector('.datatables-ajax');

        if (dt_ajax_table) {
            new DataTable(dt_ajax_table, {
                processing: false,
                serverSide: false,
                scrollX: true,
                ajax: {
                    url: "{{ route('dashboard.service.json') }}",
                    dataSrc: 'data'
                },
                order: [[0, 'desc']],
                columns: [
                    { data: 'id' },
                    { data: 'title' },
                    {
                        data: 'image',
                        render: function (data) {
                            return data; 
                        }
                    },
                    {
                        data: 'icon',
                        render: function (data) {
                            return data; 
                        }
                    },
                    { data: 'status' },
                    { data: 'created_at' },
                    { data: 'action' }
                ]
            });
        }

    });

    $(document).ready(function() {
        $('.btn-add').click(function () {
            $('#alertPlaceholder').empty();
            $('.add-show-image').addClass('d-flex');
            $('.add-show-image').removeClass('d-none');
            $('.edit-show-image').addClass('d-none');
            $('#add-modal').modal('show');
        });
    });

    $(function () {
        const modal = new bootstrap.Modal(document.getElementById('add-modal'));

        function showAlert(type, message) {
            const icon = (type === 'success') ? 'check-circle-fill' : 'exclamation-triangle-fill';
            $('#alertPlaceholder').html(
                `<div class="alert alert-${type} alert-dismissible fade show mb-3" role="alert">
                    <i class="bi bi-${icon}"></i>${message}
                </div>`
            );
        }

        function resetModal() {
            $('#alertPlaceholder').empty();
            $('#service_id').val('');
            $('#title').val('');
            $('#status').val('');
            $('#modalCenterTitle').text('Add Service');
            $('#saveFundingBtn').text('Save');
        }

        $('#add-modal').on('hidden.bs.modal', function () {
            resetModal();
        });

        $('#addProceedingBtn').on('click', function () {
            resetModal();
            modal.show();
        });

        $(document).on('click', '.edit-btn', function () {
            const id = $(this).data('id');
            const fetchUrl = `{{ route('dashboard.service.show', ':id') }}`.replace(':id', id);

            $.get(fetchUrl, function (data) {
                // Set input values
                $('#service_id').val(data.id);
                $('#title').val(data.title);
                $('#status').val(data.status);

                // ✅ Show existing image & icon previews (not inside input)
                const imagePreview = data.image
                    ? `<img src="${data.image}" alt="Current Image" width="80" height="80" class="rounded border">`
                    : `<span class="text-muted">No image available</span>`;

                const iconPreview = data.icon
                    ? `<img src="${data.icon}" alt="Current Icon" width="60" height="60" class="rounded border">`
                    : `<span class="text-muted">No icon available</span>`;

                $('#image-preview').html(imagePreview);
                $('#icon-preview').html(iconPreview);
                $('.add-show-image').addClass('d-none');
                $('.edit-show-image').removeClass('d-none');
                $('.edit-show-image').addClass('d-flex');

                // Update modal text and button
                $('#modalCenterTitle').text('Edit Service');
                $('#saveFundingBtn').text('Update');

                // ✅ Finally, open modal
                $('#add-modal').modal('show');
            });
        });


        $(document).on('click', '.delete-btn', function () {
            const id   = $(this).data('id');
            const row  = $(this).closest('tr');
            const url  = `{{ route('dashboard.service.destroy', ':id') }}`.replace(':id', id);

            if (!confirm('Are you sure you want to delete this proceeding?')) {
                return;
            }

            $.ajax({
                url: url,
                type: 'DELETE',
                data: { _token: '{{ csrf_token() }}' },
                success: function (response) {
                    $('.datatables-ajax').DataTable().ajax.reload(null, false);
                },
                error: function () {
                    alert('Failed to delete. Please try again.');
                }
            });
        });

        $(document).on('keydown', function (e) {
            if (e.ctrlKey && e.key === 's') {
                e.preventDefault();
                $('#saveFundingBtn').click();
            }
        });

        $('#saveFundingBtn').on('click', function () {
            if ($(this).prop('disabled')) return;

            const $btn = $(this)
                .prop('disabled', true)
                .html(`<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>Saving…`);

            $('#alertPlaceholder').empty();

            const id = $('#service_id').val();
            const title = $('#title').val();
            const image = $('#image')[0].files[0]; // ✅ get actual file
            const icon = $('#icon')[0].files[0];   // ✅ get actual file

            const url = id
                ? `{{ route('dashboard.service.update', ':id') }}`.replace(':id', id)
                : `{{ route('dashboard.service.store') }}`;
            const method = id ? 'POST' : 'POST'; // both use POST (we’ll spoof PUT for updates)

            // ✅ Create FormData (important for file upload)
            const formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            if (id) formData.append('_method', 'PUT'); // Laravel spoof PUT
            formData.append('title', title);
            if (image) formData.append('image', image);
            if (icon) formData.append('icon', icon);

            $.ajax({
                url: url,
                type: method,
                data: formData,
                processData: false, // required for FormData
                contentType: false, // required for FormData
                cache: false,
                dataType: 'json',
                success: function (response) {
                    showAlert('success', response.message);
                    $('.datatables-ajax').DataTable().ajax.reload(null, false);

                    if (!id) {
                        $('#title').val('');
                        $('#image').val('');
                        $('#icon').val('');
                    } else {
                        modal.hide();
                    }
                },
                error: function (xhr) {
                    if (xhr.status === 422 && xhr.responseJSON?.errors) {
                        const errors = Object.values(xhr.responseJSON.errors).flat().join('<br>');
                        showAlert('danger', errors);
                    } else {
                        showAlert('danger', 'Something went wrong. Please try again.');
                    }
                },
                complete: function () {
                    $btn.prop('disabled', false).text(id ? 'Update' : 'Save');
                }
            });
        });

        // $('#saveFundingBtn').on('click', function () {
        //     if ($(this).prop('disabled')) return;
        //     $(this).prop('disabled', true);
        //     $('#alertPlaceholder').empty();
        //     const id = $('#service_id').val();
        //     const title = $('#title').val();
        //     const image = $('#image').val();
        //     const icon = $('#icon').val();
        //     const $btn = $(this).prop('disabled', true).html(
        //         `<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>Saving…`
        //     );

        //     const url = id
        //         ? `{{ route('dashboard.service.update', ':id') }}`.replace(':id', id)
        //         : `{{ route('dashboard.service.store') }}`;
        //     const method = id ? 'PUT' : 'POST';

        //     $.ajax({
        //         url: url,
        //         type: method,
        //         data: {
        //             _token: '{{ csrf_token() }}',
        //             title: title,
        //             image: image,
        //             icon: icon,
        //         },
        //         dataType: 'json'
        //     })
        //     .done(function (response) {
        //         console.log(response);
        //         showAlert('success', response.message);
        //         $('.datatables-ajax').DataTable().ajax.reload(null, false);
        //         if (!id){
        //             $('#title').val('');
        //             $('#image').val('');
        //             $('#icon').val('');
        //             $('#class').val('');
        //         }
        //         else {
        //             modal.hide();
        //         }
        //     })
        //     .fail(function (xhr) {
        //         if (xhr.status === 422) {
        //             const errors = Object.values(xhr.responseJSON.errors).flat().join('<br>');
        //             showAlert('danger', errors);
        //         } else {
        //             showAlert('danger', 'Something went wrong. Please try again.');
        //         }
        //     })
        //     .always(function () {
        //         $btn.prop('disabled', false).text(id ? 'Update' : 'Save');
        //     });
        // });
    });

    $(document).on('change', '.status-toggle', function () {
        const checkbox = $(this);
        const id = checkbox.data('id');
        const status = checkbox.is(':checked') ? 1 : 0;
        const label = checkbox.closest('label');

        $.ajax({
            url: '{{ route('dashboard.service.toggleStatus', [':id']) }}'.replace(':id', id),
            method: 'PATCH',
            data: {
                _token: '{{ csrf_token() }}',
                status: status
            },
            success: function (response) {
                if (status === 1) {
                    label.removeClass('switch-danger').addClass('switch-success');
                } else {
                    label.removeClass('switch-success').addClass('switch-danger');
                }
            },
            error: function () {
                alert('Failed to update status');
                checkbox.prop('checked', !status);
            }
        });
    });

</script>
@stop

@section('content')
<div class="container-fluid flex-grow-1 container-p-y">
    <div class="card">
        <div class="d-flex align-items-center justify-content-between p-4 pb-0">
            <div class="heading">
                <h5 class="card-header p-0 text-md-start text-center">Services</h5>
            </div>
            <div class="button">
                <button type="button" class="btn btn-label-secondary waves-effect btn-add"><i class = "icon-base ti tabler-plus"></i> Add Service</button>
            </div>
        </div>
        <div class="card-datatable text-nowrap">
            <table class="datatables-ajax table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>icon</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody></tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="add-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                {{-- <input type="hidden" id="floor_id"> --}}
                <h5 class="modal-title" id="modalCenterTitle">Add Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-4">
                        <div id="alertPlaceholder"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" id="title" class="form-control" placeholder="Enter Title">
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" id="image" class="add-show-image form-control" placeholder="Insert Image">
                        <div class="edit-show-image gap-lg-3 justiy-content-center align-items-center" style="padding: 5px;background:#eee;border-radius:5px;">
                            <input type="file" id="image" class="form-control" placeholder="Insert Image">
                            <div id="image-preview" class="mt-2"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4">
                        <label for="icon" class="form-label">Icon</label>
                        <input type="file" id="icon" class="form-control" placeholder="Insert Icon">
                        <div id="icon-preview" class="d-none mt-2"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary waves-effect" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button" id="saveFundingBtn" class="btn btn-primary waves-effect waves-light">Save</button>
            </div>
        </div>
    </div>
</div>
@stop

