    <div class="modal-overlay" id="editProjectModal">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title">Edit Project</div>
                <button class="modal-close" onclick="closeModal('editProjectModal')">×</button>
            </div>
            <div class="modal-body">
                <div class="form-grid">
                    <div class="form-group full">
                        <label class="form-label">Project Title</label>
                        <input type="text" class="form-input" value="Nexus Brand Identity">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Category</label>
                        <select class="form-select">
                            <option selected>Branding</option>
                            <option>Logo Design</option>
                            <option>UI/UX Design</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <select class="form-select">
                            <option selected>Published</option>
                            <option>Draft</option>
                        </select>
                    </div>
                    <div class="form-group full">
                        <label class="form-label">Description</label>
                        <textarea
                            class="form-textarea">Complete brand identity for Nexus Corp including logo, colors, and brand guidelines.</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Client</label>
                        <input type="text" class="form-input" value="Nexus Corp">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Date</label>
                        <input type="date" class="form-input" value="2025-06-01">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" onclick="closeModal('editProjectModal')">Cancel</button>
                <button class="btn btn-primary"
                    onclick="closeModal('editProjectModal');showToast('Project updated!','success')">Save
                    Changes</button>
            </div>
        </div>
    </div>
