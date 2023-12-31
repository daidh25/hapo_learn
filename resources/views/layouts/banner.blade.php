<div class="first-layout">
    <div class="banner" style="background-image: url('{{ asset('images/Hapo_Learn_banner_pc.png')}}');">
        <div class="banner-content">
            <p class="banner-content-title">Learn Anytime, Anywhere <br> <span>at HapoLearn !</span> <img src="{{ asset('images/logo_mini.png') }}" alt="">
                </p>
                <p class="banner-content-slogan">
                    Interactive lessons, "on-the-go" practice, peer support.
                </p>
                <p><a href="{{ route('course.index') }}" class="link-learn">Start learning Now!</a></p>
        </div>
    </div>
</div>
@if (session('success'))
    <div class="toast toast-login" role="alert" aria-live="assertive" aria-atomic="true" id="toast">
        <div class="toast-header">
            <strong class="me-auto">HapoLearn</strong>
            <small>Now</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close" onclick="getElementById('toast').classList.toggle('none')"></button>
        </div>
        <div class="toast-body text-success">
            {{ session('success') }}
        </div>
    </div>
@endif
