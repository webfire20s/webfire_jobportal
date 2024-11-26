<style>
    /* Custom Sidebar Styles */
.custom-sidebar {
    background-color: #343a40; /* Dark background for sidebar */
    color: #fff; /* White text color */
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 267px !important;
}

.sidebar-title {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 20px;
}

.sidebar-nav {
    list-style-type: none;
    padding-left: 0;
}

.sidebar-nav .nav-item {
    margin-bottom: 15px;
}

.sidebar-nav .nav-link {
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #bbb; /* Light gray text for inactive links */
    text-decoration: none;
    font-size: 1.1rem;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.sidebar-nav .nav-link:hover {
    background-color: #495057; /* Darker shade on hover */
    color: #fff;
}

.sidebar-nav .nav-link.active {
    background-color: #007bff; /* Highlight active link */
    color: #fff;
}

.sidebar-nav .nav-link i {
    font-size: 1.1rem;
}

/* Custom Tab Styles */
.card-header-tabs .nav-item {
    margin-right: 15px;
}

.card-header-tabs .nav-link {
    font-size: 1.1rem;
    padding: 10px 15px;
    border-radius: 5px;
}

.card-header-tabs .nav-link.active {
    background-color: #007bff; /* Blue color for active tab */
    color: #fff;
}

/* Tab Content Styling */
.tab-content {
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 5px;
}

.tab-pane {
    font-size: 1.1rem;
    color: #333;
}

/* Responsive Design */
@media (max-width: 992px) {
    .custom-sidebar {
        margin-bottom: 20px;
    }
}

</style>
<!-- Sidebar -->
        <div class="col-lg-3">
            <div class="custom-sidebar">
                <h5 class="sidebar-title">Categories</h5>
                <ul class="sidebar-nav">
                    @foreach ($categories as $category)
                        @if ($category->id > 3) <!-- Skip categories with id <= 3 -->
                            <li class="nav-item">
                                <a href="{{ route('user.home', ['category_id' => $category->id]) }}"
                                    class="nav-link {{ request('category_id') == $category->id ? 'active' : '' }}">
                                    <span>{{ $category->name }}</span>
                                    <i class="bi bi-arrow-right"></i> <!-- Optional icon -->
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
