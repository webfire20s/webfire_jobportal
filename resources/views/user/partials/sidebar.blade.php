<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark mt-4" style="width: 280px;">
    <ul class="nav nav-pills flex-column mb-auto">
        @foreach ($categories as $category)
            @if ($category->id > 3) <!-- Skip categories with id <= 3 -->
                <li class="nav-item">
                    <a href="{{ route('user.home', ['category_id' => $category->id]) }}"
                        class="nav-link {{ request('category_id') == $category->id ? 'active' : '' }}">
                        {{ $category->name }}
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</div>