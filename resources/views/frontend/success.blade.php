@extends('frontend/layouts/master')

@section('metas')
@stop

@section('title')
    Thank You for Your Purchase - Mailing Advantage Plan
@stop

@section('css')
    <style>
        /* Thank You Css Start */
        .header-area-7 {
            background-color: black!important;
        }
    </style>
@stop

@section('content')
    <section class="stripe-thankyou first second position-relative">
        <!-- Background Elements -->
        
        <div class="our-team">
            <div class="thank-four-borders first">
                <div class="d-flex">
                    <div class="border-primary"></div>
                    <div class="border-secondary"></div>
                </div>
                <div class="d-flex">
                    <div class="border-third"></div>
                    <div class="border-fourth"></div>
                </div>
            </div>
            <div class="thank-four-borders second">
                <div class="d-flex">
                    <div class="border-primary"></div>
                    <div class="border-secondary"></div>
                </div>
                <div class="d-flex">
                    <div class="border-third"></div>
                    <div class="border-fourth"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="thank-you-card">
                <div class="header-gradient"></div>
                
                <div class="content padding">
                    {{-- <div class="icon-circle">
                        <i class="fas fa-check"></i>
                    </div> --}}
                    <lord-icon
                        src="https://cdn.lordicon.com/zdfcfvwu.json"
                        trigger="loop"
                        delay="2000"
                        colors="primary:#f14246">
                    </lord-icon>

                    <h1 class="sec-title">Thank You for Your Purchase!</h1>
                    
                    <p class="subtitle">
                        Your Mailing Advantage Plan has been successfully activated. You'll receive a confirmation email with all the details shortly. Welcome to our premium service!
                    </p>
                    
                    <div class="confirmation-details">
                        <h2>Order Summary</h2>
                        
                        @if($mailingAdvantage)
                                
                            <div class="detail-row">
                                <div class="detail-label">
                                    <i class="fas fa-cube"></i> Plan Name:
                                </div>
                                <div class="detail-value">{{ $mailingAdvantage->service_name }}</div>
                            </div>
                            
                            <div class="detail-row flex-lg-row flex-md-row flex-column">
                                <div class="detail-label">
                                    <i class="fas fa-receipt"></i> Payment ID:
                                </div>
                                <div class="detail-value">STRP-<span id="transaction-id">{{ $mailingAdvantage->payment_id }}</span></div>
                            </div>
                            
                            <div class="detail-row">
                                <div class="detail-label">
                                    <i class="fas fa-calendar-alt"></i> Purchase Date:
                                </div>
                                <div class="detail-value">
                                    <span id="current-date">    
                                        {{ $mailingAdvantage->created_at->format('d M Y') }}
                                    </span>
                                </div>
                            </div>
                            
                            <div class="detail-row">
                                <div class="detail-label">
                                    <i class="fas fa-dollar-sign"></i> Amount Paid:
                                </div>
                                <div class="detail-value">&pound;{{ $mailingAdvantage->price }}</span></div>
                            </div>
                            
                            <div class="detail-row">
                                <div class="detail-label">
                                    <i class="fas fa-bolt"></i> Status:
                                </div>
                                <div class="detail-value">
                                    @if($mailingAdvantage->payment_status == 'paid')
                                    <span class="badge bg-success" style="background: linear-gradient(90deg, #52b347, #429942); color: white; padding: 5px 15px; border-radius: 20px; font-size: 0.9rem;">
                                        <i class="fas fa-check-circle"></i> Active
                                    </span>
                                    @elseif($mailingAdvantage->payment_status == 'unpaid')
                                    <span class="badge bg-success" style="background: linear-gradient(90deg, #52b347, #429942); color: white; padding: 5px 15px; border-radius: 20px; font-size: 0.9rem;">
                                        <i class="fas fa-check-circle"></i> Active
                                    </span>
                                    @endif
                                </div>
                            </div>
                        @else
                        @endif
                    </div>
                    
                </div>
            </div>
            <div class="time-duration">
                <p>Redirecting in <b><span id="counter">20</span></b> seconds...</p>
            </div>
        </div>
    </section>
@stop

@section('js')
<script src="https://cdn.lordicon.com/lordicon.js"></script>
<script>
    // Set current date
    const now = new Date();
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    // document.getElementById('current-date').textContent = now.toLocaleDateString('en-US', options);
    
    // Set next billing date (30 days from now)
    const nextBilling = new Date(now);
    nextBilling.setDate(nextBilling.getDate() + 30);
    document.getElementById('next-billing-date').textContent = nextBilling.toLocaleDateString('en-US', options);
    
    // Add some interactive effects
    document.addEventListener('DOMContentLoaded', function() {
        // Add click effect to buttons
        const buttons = document.querySelectorAll('.btn');
        buttons.forEach(button => {
            button.addEventListener('click', function(e) {
                // Create ripple effect
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.7);
                    transform: scale(0);
                    animation: ripple-animation 0.6s linear;
                    width: ${size}px;
                    height: ${size}px;
                    top: ${y}px;
                    left: ${x}px;
                    pointer-events: none;
                `;
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });
        
        // Add CSS for ripple animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple-animation {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
        
        // Generate random transaction ID if needed
        const transactionId = document.getElementById('transaction-id');
        if (transactionId && transactionId.textContent === '789234567891') {
            // Generate a more realistic transaction ID
            const randomId = 'STRP-' + Math.floor(100000000000 + Math.random() * 900000000000);
            transactionId.textContent = randomId.substring(5); // Remove STRP- prefix for the span
        }
    });
</script>
<script>
    $(function () {
        let seconds = 20;

        let timer = setInterval(function () {
            seconds--;
            $('#counter').text(seconds);

            if (seconds <= 0) {
                clearInterval(timer);
                window.location.href = "/";
            }
        }, 1000);
    });
</script>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }

    window.onpopstate = function () {
        window.location.href = "{{ route('index') }}"; 
    };
</script>
@stop