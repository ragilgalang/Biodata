<footer class="py-5 mt-auto glass-panel rounded-0 border-start-0 border-end-0 border-bottom-0">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-2">
                    <i class="bi bi-code-slash text-primary fs-4 me-2"></i>
                    <h5 class="fw-bold text-white m-0">My Portfolio</h5>
                </div>
                <p class="text-secondary small mb-0">
                    Exploring the world of code, one pixel at a time.
                </p>
            </div>
            
            <div class="col-md-6 text-center text-md-end">
                <div class="d-flex justify-content-center justify-content-md-end gap-4">
                    <a href="#" class="social-link" title="GitHub">
                        <i class="bi bi-github"></i>
                    </a>
                    <a href="#" class="social-link" title="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="#" class="social-link" title="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="social-link" title="Email">
                        <i class="bi bi-envelope"></i>
                    </a>
                </div>
                <div class="mt-3">
                    <small class="text-secondary opacity-75">
                        &copy; {{ date('Y') }} Created with <i class="bi bi-heart-fill text-danger animate-pulse"></i> by <span class="text-white">Paul</span>
                    </small>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    /* Footer Specific Styles */
    .social-link {
        color: #94a3b8;
        font-size: 1.25rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.05);
    }
    
    .social-link:hover {
        color: #fff;
        background: var(--primary-color);
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
        border-color: transparent;
    }
    
    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
    @keyframes pulse {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: .7; transform: scale(1.1); }
    }
</style>
