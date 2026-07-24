    <div class="modal-overlay" id="addTestiModal">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title">Add Testimonial</div>
                <button class="modal-close" onclick="closeModal('addTestiModal')">×</button>
            </div>
            <div class="modal-body">
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label">Client Name <span class="required">*</span></label>
                        <input type="text" class="form-input" placeholder="e.g. Sara Ahmed">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Company</label>
                        <input type="text" class="form-input" placeholder="e.g. CEO, Nexus Corp">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Rating</label>
                        <select class="form-select">
                            <option>⭐⭐⭐⭐⭐ — 5 Stars</option>
                            <option>⭐⭐⭐⭐ — 4 Stars</option>
                            <option>⭐⭐⭐ — 3 Stars</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Avatar Initial</label>
                        <input type="text" class="form-input" placeholder="e.g. S" maxlength="1">
                    </div>
                    <div class="form-group full">
                        <label class="form-label">Testimonial Text <span class="required">*</span></label>
                        <textarea class="form-textarea" placeholder="Write the client's review..."></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" onclick="closeModal('addTestiModal')">Cancel</button>
                <button class="btn btn-primary"
                    onclick="closeModal('addTestiModal');showToast('Testimonial added!','success')">Add
                    Testimonial</button>
            </div>
        </div>
    </div>
