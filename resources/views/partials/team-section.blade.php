<section id="our-team" class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4" data-aos="fade-up">

        <!-- Section Title -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-gray-800">Meet Our Dedicated Team</h2>
            <p class="text-gray-500 mt-2">Dedicated professionals driving our mission forward.</p>
        </div>

        {{-- Check if teamMembers variable exists --}}
        @if (!isset($teamMembers) || $teamMembers->isEmpty())
            <div class="text-center bg-blue-100 text-blue-700 py-3 rounded-lg">
                No team members are currently listed. Please add them via the admin panel.
            </div>
        @else

            <!-- Responsive Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($teamMembers as $member)
                    <div class="flex flex-col items-center bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all p-6">

                        {{-- Profile Image --}}
                        <div class="mb-5">
                            @if ($member->photo_path)
                                <img src="{{ asset('public/storage/'.$member->photo_path) }}"
                                     alt="{{ $member->name }}"
                                     class="w-36 h-36 rounded-full object-cover border-4 border-white shadow-md">
                            @else
                                <!-- Placeholder -->
                                <div class="w-36 h-36 rounded-full bg-gray-300 flex items-center justify-center text-white text-4xl font-bold">
                                    {{ strtoupper(substr($member->name, 0, 1)) }}
                                </div>
                            @endif
                        </div>

                        <!-- Member Info -->
                        <h3 class="text-xl font-semibold text-gray-800">{{ $member->name }}</h3>
                        <p class="text-sm uppercase tracking-wider text-blue-500 font-medium mt-1">
                            {{ $member->designation }}
                        </p>

                        {{-- Description --}}
                        @if ($member->description)
                            <p class="text-gray-600 text-sm mt-4 line-clamp-3">
                                {{ $member->description }}
                            </p>
                        @endif

                        {{-- Social Icons (Optional) --}}
                        <div class="mt-4 flex space-x-3">
                            <!-- Example social icons – remove or edit -->
                            <!--
                            <a href="#" class="text-gray-500 hover:text-blue-600 transition">
                                <i class="fab fa-facebook text-xl"></i>
                            </a>
                            -->
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
