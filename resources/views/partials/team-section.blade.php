<section id="our-team" class="team-section py-5 bg-light">
    <div class="container" data-aos="fade-up">
        <div class="section-title text-center mb-5">
            <h2 class="display-5 fw-bold text-dark">Meet Our Dedicated Team</h2>
            <p class="text-muted">Dedicated professionals driving our mission forward.</p>
        </div>

        {{-- Check if teamMembers variable exists and is not empty --}}
        @if (!isset($teamMembers) || $teamMembers->isEmpty())
            <div class="alert alert-info text-center" role="alert">
                No team members are currently listed. Please add them via the admin panel.
            </div>
        @else
            {{-- Responsive Grid: 1 column on mobile, 2 on tablet, 4 on desktop --}}
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-center">
                @foreach ($teamMembers as $member)
                    <div class="col d-flex">
                        <div class="card h-100 w-100 shadow-sm border-0 text-center">
                            
                            {{-- Member Photo --}}
                            <div class="p-4">
                                @if ($member->photo_path)
                                    <img src="{{ Storage::url($member->photo_path) }}" 
                                         class="card-img-top mx-auto rounded-circle border border-5 border-white shadow-sm" 
                                         alt="{{ $member->name }}" 
                                         style="width: 150px; height: 150px; object-fit: cover;">
                                @else
                                    {{-- Placeholder for missing photo --}}
                                    <div class="mx-auto rounded-circle bg-secondary d-flex align-items-center justify-content-center text-white fw-bold" 
                                         style="width: 150px; height: 150px; font-size: 2rem;">
                                        {{ strtoupper(substr($member->name, 0, 1)) }}
                                    </div>
                                @endif
                            </div>

                            <div class="card-body pt-0">
                                <h5 class="card-title fw-bold text-primary mb-1">{{ $member->name }}</h5>
                                <p class="text-uppercase small text-muted mb-3">{{ $member->designation }}</p>
                                
                                {{-- Description --}}
                                @if ($member->description)
                                    <p class="card-text text-start text-truncate-3" style="font-size: 0.9rem; color: #555;">
                                        {{ $member->description }}
                                    </p>
                                @endif
                            </div>
                            
                            {{-- Optional: Footer for consistent height if card-text is variable --}}
                            <div class="card-footer bg-white border-0 py-2">
                                {{-- Add social links here if needed --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
