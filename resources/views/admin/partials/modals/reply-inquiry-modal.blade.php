    <div class="modal-overlay" id="replyModal">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title">📩 Inquiry Details</div>
                <button class="modal-close" onclick="closeModal('replyModal')">×</button>
            </div>
            <div class="modal-body">
                <div
                    style="background:var(--bg3);border-radius:var(--radius-sm);padding:16px;margin-bottom:18px;border:1px solid var(--border)">
                    <div style="display:flex;gap:10px;margin-bottom:10px">
                        <div class="inquiry-avatar" id="modalInquiryAvatar">A</div>
                        <div>
                            <div style="font-weight:600;font-size:14px" id="modalInquiryName"></div>
                            <div style="font-size:12px;color:var(--text-3)" id="modalInquiryContact"></div>
                            <div style="font-size:11px;color:var(--text-3);margin-top:2px" id="modalInquiryTime"></div>
                        </div>
                    </div>
                    <p style="font-size:13px;color:var(--text-2);line-height:1.7" id="modalInquiryMessage"></p>
                </div>
                <div class="form-group mb-16">
                    <label class="form-label">Reply Message</label>
                    <textarea class="form-textarea" placeholder="Type your reply here..."></textarea>
                </div>
                <div style="display:flex;gap:12px">
                    <button class="btn btn-secondary" style="flex:1" onclick="markInquiryRead()">Mark as Read</button>
                    <a href="#" id="modalWhatsappLink" target="_blank" class="btn btn-primary"
                        style="flex:1;justify-content:center;background:#25D366;border-color:#25D366;color:#fff">💬
                        Reply on WhatsApp</a>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" onclick="closeModal('replyModal')">Close</button>
                <button class="btn btn-primary"
                    onclick="closeModal('replyModal');showToast('Reply sent via email!','success')">Send Email
                    Reply</button>
            </div>
        </div>
    </div>

