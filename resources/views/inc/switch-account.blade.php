<div class="modal fade" id="switchAccountModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-simple">
        <div class="modal-content">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="text-center mb-4">
                <h4 class="mb-2">Switch Account</h4>
                <p>Select an account from the list below.</p>
            </div>

            <form id="switchAccountForm" class="fv-plugins-bootstrap5 fv-plugins-framework" onsubmit="return false">
                <div class="mb-4">
                <label class="form-label" for="accountSelect">Choose Account</label>
                <select id="accountSelect" class="form-select" required>
                    <option value="" disabled selected>Select an account</option>
                </select>
                <div class="invalid-feedback">Please select an account</div>
                </div>

                <div class="d-flex justify-content-end gap-3">
                <button type="submit" class="btn btn-primary">Switch</button>
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>