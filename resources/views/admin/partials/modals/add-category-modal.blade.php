    <div class="modal-overlay" id="addCatModal">
        <div class="modal" style="max-width:480px">
            <div class="modal-header">
                <div class="modal-title">Add Category</div>
                <button class="modal-close" onclick="closeModal('addCatModal')">×</button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-16">
                    <label class="form-label">Category Name <span class="required">*</span></label>
                    <input type="text" class="form-input" placeholder="e.g. Logo Design">
                </div>
                <div class="form-group mb-16">
                    <label class="form-label">Icon / Emoji</label>
                    <input type="text" class="form-input" placeholder="e.g. 🔵">
                </div>
                <div class="form-group">
                    <label class="form-label">Description</label>
                    <textarea class="form-textarea" style="min-height:80px"
                        placeholder="Short category description..."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" onclick="closeModal('addCatModal')">Cancel</button>
                <button class="btn btn-primary"
                    onclick="closeModal('addCatModal');showToast('Category created!','success')">Create
                    Category</button>
            </div>
        </div>
    </div>
