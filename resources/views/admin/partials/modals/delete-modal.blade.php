    <div class="modal-overlay" id="deleteModal">
        <div class="modal" style="max-width:420px">
            <div class="modal-header">
                <div class="modal-title">⚠️ Confirm Delete</div>
                <button class="modal-close" onclick="closeModal('deleteModal')">×</button>
            </div>
            <div class="modal-body">
                <p style="color:var(--text-2);font-size:14px;line-height:1.7">Are you sure you want to delete this item?
                    This action <strong style="color:var(--danger)">cannot be undone</strong> and all associated data
                    will be permanently removed.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" onclick="closeModal('deleteModal')">Cancel</button>
                <button class="btn btn-danger"
                    onclick="closeModal('deleteModal');showToast('Item deleted','error')">Delete Permanently</button>
            </div>
        </div>
    </div>
