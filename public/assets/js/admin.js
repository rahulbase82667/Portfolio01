// ========== LOGIN ===========
function doLogin() {
  document.getElementById('loginPage').classList.remove('show');
  showToast('Welcome back, Admin! 👋', 'success');
}
function doLogout() {
  document.getElementById('loginPage').classList.add('show');
}

// ========== PAGE NAVIGATION ===========
const pageTitles = {
  'dashboard': ['Dashboard', 'Overview'],
  'projects': ['Projects', 'Manage Projects'],
  'categories': ['Categories', 'Manage Categories'],
  'testimonials': ['Testimonials', 'Client Reviews'],
  'inquiries': ['Contact Inquiries', 'Messages'],
  'settings': ['Website Settings', 'Configuration'],
  'add-project': ['Add New Project', 'Create'],
};

function showPage(id, navEl) {
  // Hide all pages
  document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
  document.getElementById('page-' + id).classList.add('active');

  // Update nav
  if (navEl) {
    document.querySelectorAll('.nav-item').forEach(n => n.classList.remove('active'));
    navEl.classList.add('active');
  }

  // Update topbar title
  const titles = pageTitles[id] || [id, ''];
  document.getElementById('topbarTitle').innerHTML =
    titles[0] + ' <span class="breadcrumb">/ <span>' + titles[1] + '</span></span>';

  // Close sidebar on mobile
  closeSidebar();
}

// ========== SIDEBAR (mobile) ===========
function toggleSidebar() {
  const sidebar = document.getElementById('sidebar');
  const overlay = document.getElementById('sidebarOverlay');
  sidebar.classList.toggle('open');
  overlay.classList.toggle('show');
}
function closeSidebar() {
  document.getElementById('sidebar').classList.remove('open');
  document.getElementById('sidebarOverlay').classList.remove('show');
}

// ========== THEME ===========
const themeBtn = document.querySelector('.theme-toggle');
function toggleTheme() {
  const html = document.documentElement;
  if (html.dataset.theme === 'dark') {
    html.dataset.theme = 'light';
    themeBtn.textContent = '🌙';
  } else {
    html.dataset.theme = 'dark';
    themeBtn.textContent = '☀️';
  }
}

// ========== NOTIFICATIONS ===========
function toggleNotif() {
  const panel = document.getElementById('notifPanel');
  panel.classList.toggle('open');
}
document.addEventListener('click', function(e) {
  const panel = document.getElementById('notifPanel');
  if (!e.target.closest('.notif-panel-pos')) panel.classList.remove('open');
});

// ========== MODALS ===========
// ========== MODALS ===========
function openModal(id) {
  document.getElementById(id).classList.add('open');
}
function closeModal(id) {
  document.getElementById(id).classList.remove('open');
}
// Close on overlay click
document.querySelectorAll('.modal-overlay').forEach(overlay => {
  overlay.addEventListener('click', function(e) {
    if (e.target === this) this.classList.remove('open');
  });
});

// ========== INQUIRY REPLY MODAL ===========
let currentInquiryId = null;

function openReplyModal(id, name, email, phone, message, time) {
  currentInquiryId = id;
  document.getElementById('modalInquiryAvatar').textContent = name.charAt(0).toUpperCase();
  document.getElementById('modalInquiryName').textContent = name;
  document.getElementById('modalInquiryContact').textContent = email + (phone ? ' · ' + phone : '');
  document.getElementById('modalInquiryTime').textContent = 'Received: ' + time;
  document.getElementById('modalInquiryMessage').textContent = message;

  const waLink = document.getElementById('modalWhatsappLink');
  const digitsOnly = (phone || '').replace(/\D/g, '');
  waLink.href = digitsOnly ? 'https://wa.me/' + digitsOnly : '#';

  openModal('replyModal');
}

function markInquiryRead() {
  if (!currentInquiryId) return;

  fetch(`/admin/inquiries/${currentInquiryId}/read`, {
    method: 'PATCH',
    headers: {
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
      'Accept': 'application/json'
    }
  })
    .then(res => res.json())
    .then(() => {
      closeModal('replyModal');
      showToast('Marked as read', 'info');
      setTimeout(() => location.reload(), 800);
    })
    .catch(() => {
      showToast('Something went wrong', 'error');
    });
}
// Close on overlay click
document.querySelectorAll('.modal-overlay').forEach(overlay => {
  overlay.addEventListener('click', function(e) {
    if (e.target === this) this.classList.remove('open');
  });
});

// ========== SETTINGS TABS ===========
function switchSettingsTab(el) {
  document.querySelectorAll('.settings-tab').forEach(t => t.classList.remove('active'));
  el.classList.add('active');
}

// ========== TOAST ===========
function showToast(msg, type = 'info') {
  const container = document.getElementById('toastContainer');
  const icons = { success: '✅', error: '❌', info: '💡' };
  const toast = document.createElement('div');
  toast.className = `toast ${type}`;
  toast.innerHTML = `<span class="toast-icon">${icons[type]}</span><span class="toast-msg">${msg}</span>`;
  container.appendChild(toast);
  setTimeout(() => {
    toast.style.opacity = '0';
    toast.style.transform = 'translateX(30px)';
    toast.style.transition = 'all 0.3s ease';
    setTimeout(() => toast.remove(), 300);
  }, 3000);
}

// ========== UPLOAD ZONE DRAG ===========
document.querySelectorAll('.upload-zone').forEach(zone => {
  zone.addEventListener('dragover', e => { e.preventDefault(); zone.classList.add('drag-over'); });
  zone.addEventListener('dragleave', () => zone.classList.remove('drag-over'));
  zone.addEventListener('drop', e => { e.preventDefault(); zone.classList.remove('drag-over'); showToast('File uploaded!', 'success'); });
});

// ========== COLOR OPTION SELECT ===========
document.querySelectorAll('.color-option').forEach(opt => {
  opt.addEventListener('click', function() {
    document.querySelectorAll('.color-option').forEach(o => o.classList.remove('selected'));
    this.classList.add('selected');
    showToast('Accent color updated', 'info');
  });
});

// ========== ESCAPE KEY ===========
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    document.querySelectorAll('.modal-overlay.open').forEach(m => m.classList.remove('open'));
    document.getElementById('notifPanel').classList.remove('open');
    closeSidebar();
  }
});

// ========== INIT ===========
// Animate stat bars on load
setTimeout(() => {
  document.querySelectorAll('.chart-bar').forEach(bar => {
    const h = bar.style.height;
    bar.style.height = '0%';
    setTimeout(() => bar.style.height = h, 100);
  });
}, 300);
