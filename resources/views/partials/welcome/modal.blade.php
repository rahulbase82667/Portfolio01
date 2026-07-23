{{-- MODAL --}}
<div class="modal-overlay" id="projectModal">
    <div class="modal">
        <div class="modal-header">
            <div class="modal-title" id="modalTitle">Project Name</div>
            <button class="modal-close" onclick="closeModal()">×</button>
        </div>
        <div class="modal-body">
            <div class="modal-thumb" id="modalThumb">🎨</div>
            <div class="modal-meta" id="modalMeta"></div>
            <div class="modal-desc" id="modalDesc"></div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-outline" onclick="closeModal()">Close</button>
            <button class="btn btn-primary" onclick="scrollToSection('contact');closeModal()">Get Similar
                Project</button>
        </div>
    </div>
</div>
