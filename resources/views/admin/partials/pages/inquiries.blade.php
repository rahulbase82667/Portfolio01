                <div class="page" id="page-inquiries">
                    <div class="section-header" style="margin-bottom:20px">
                        <div class="section-title">Contact Inquiries</div>
                        <div style="display:flex;gap:8px">
                            <button class="btn btn-secondary btn-sm">Export CSV</button>
                            <select class="filter-select">
                                <option>All Messages</option>
                                <option>Unread</option>
                                <option>Read</option>
                            </select>
                        </div>
                    </div>

                    @forelse ($inquiries as $inquiry)
                    <div class="inquiry-item {{ $inquiry->is_read ? '' : 'unread' }}"
                        onclick="openReplyModal({{ $inquiry->id }}, '{{ addslashes(str_replace(["\r", "\n"], ' ', $inquiry->full_name)) }}', '{{ addslashes($inquiry->email) }}', '{{ addslashes($inquiry->phone) }}', '{{ addslashes(str_replace(["\r", "\n"], ' ', $inquiry->project_details)) }}', '{{ $inquiry->created_at->diffForHumans() }}')">
                        <div class="inquiry-avatar">{{ substr($inquiry->full_name, 0, 1) }}</div>
                        <div class="inquiry-content">
                            <div class="inquiry-name">{{ $inquiry->full_name }}</div>
                            <div class="inquiry-email">{{ $inquiry->email }} &middot; {{ $inquiry->phone }}</div>
                            <div class="inquiry-msg">{{ $inquiry->project_details }}</div>
                        </div>
                        <div class="inquiry-meta">
                            <div class="inquiry-time">{{ $inquiry->created_at->diffForHumans() }}</div>
                            @if (!$inquiry->is_read)
                            <span class="new-badge">New</span>
                            @endif
                        </div>
                    </div>
                    @empty
                    <div style="text-align:center;padding:40px;color:var(--text-3)">
                        No inquiries yet.
                    </div>
                    @endforelse

                    <div style="margin-top:16px">
                        {{ $inquiries->links() }}
                    </div>
                </div>
