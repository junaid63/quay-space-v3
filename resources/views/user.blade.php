@extends('layouts/master')

@section('title')
User
@stop

@section('css')
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
                response:false,
                scrollX:true,
                ajax: {
                    url: "{{ route('dashboard.user.json') }}",
                    dataSrc: 'data'
                },
                order: [[0, 'desc']],
                columns: [
                    { data: 'id' },
                    { data: 'role' },
                    { data: 'name' },
                    { data: 'email' },
                    { data: 'status' },
                    { data: 'created_at' },
                    { data: 'action' },
                ]
            });
        }
    });

    $(document).ready(function() {
        $('.btn-add').click(function () {
            $('#alertPlaceholder').empty();
            $('#add-modal').modal('show');
        });
    });

    $(function () {
        const modal = new bootstrap.Modal(document.getElementById('add-modal'));

        function showAlert(type, message) {
            const icon = (type === 'success') ? 'check-circle-fill' : 'exclamation-triangle-fill';
            $('#alertPlaceholder').html(
                `<div class="alert alert-${type} alert-dismissible fade show mb-3" role="alert">
                    <i class="bi bi-${icon} me-2"></i>${message}
                </div>`
            );
        }

        function resetModal() {
            $('#alertPlaceholder').empty();
            $('#name').val('');
            $('#email').val('');
            $('#password').val('');
            $('#user_id').val('');
            $('#modalCenterTitle').text('Add User');
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

            const fetchUrl = `{{ route('dashboard.user.show', ':id') }}`.replace(':id', id);

            $.get(fetchUrl, function (data) {
                $('#user_id').val(data.id);
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#modalCenterTitle').text('Edit User');
                $('#saveFundingBtn').text('Update');
                modal.show();
            });
        });

        $(document).on('click', '.delete-btn', function () {
            const id   = $(this).data('id');
            const row  = $(this).closest('tr');
            const url  = `{{ route('dashboard.user.destroy', ':id') }}`.replace(':id', id);

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
            $(this).prop('disabled', true);
            $('#alertPlaceholder').empty();
            const id = $('#user_id').val();
            const name = $('#name').val();
            const email = $('#email').val();
            const password = $('#password').val();
            const password_confirmation = $('#password_confirmation').val();
            const $btn = $(this).prop('disabled', true).html(
                `<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>Saving…`
            );

            const url = id
                ? `{{ route('dashboard.user.update', ':id') }}`.replace(':id', id)
                : `{{ route('dashboard.user.store') }}`;
            const method = id ? 'PUT' : 'POST';

            $.ajax({
                url: url,
                type: method,
                data: {
                    _token: '{{ csrf_token() }}',
                    name: name,
                    email: email,
                    password: password,
                    password_confirmation: password_confirmation
                },
                dataType: 'json'
            })
            .done(function (response) {
                showAlert('success', response.message);
                $('.datatables-ajax').DataTable().ajax.reload(null, false);
                if (!id){
                    $('#title').val('');
                    $('#class').val('');
                }
                else {
                    modal.hide();
                }
            })
            .fail(function (xhr) {
                if (xhr.status === 422) {
                    const errors = Object.values(xhr.responseJSON.errors).flat().join('<br>');
                    showAlert('danger', errors);
                } else {
                    showAlert('danger', 'Something went wrong. Please try again.');
                }
            })
            .always(function () {
                $btn.prop('disabled', false).text(id ? 'Update' : 'Save');
            });
        });
    });

    $(document).on('change', '.status-toggle', function () {
        const checkbox = $(this);
        const id = checkbox.data('id');
        const status = checkbox.is(':checked') ? 1 : 0;
        const label = checkbox.closest('label');

        $.ajax({
            url: '{{ route('dashboard.user.toggleStatus', [':id']) }}'.replace(':id', id),
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
                <h5 class="card-header p-0 text-md-start text-center">User</h5>
            </div>
            <div class="button">
                <button type="button" class="btn btn-label-secondary waves-effect btn-add"><i class = "icon-base ti tabler-plus"></i> Add User</button>
            </div>
        </div>
        <div class="card-datatable text-nowrap">
            <table class="datatables-ajax table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th>Name</th>
                        <th>Email</th>
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
                <input type="hidden" id="user_id">
                <h5 class="modal-title" id="modalCenterTitle">Add User</h5>
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
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Enter Name">
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="Enter Email">
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" class="form-control" placeholder="Enter Password">
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-4">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password">
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

