<section class="different">

    <div class="different-start">
        <p>Our trainings are based on international certifications</p>
        <div class="different-logos">
            <img src="{{ asset('images/different-comptia.png') }}" alt="comptia">
            <img src="{{ asset('images/different-microsoft.png') }}" alt="microsoft">
            <img src="{{ asset('images/different-azzure.png') }}" alt="azzure">
            <img src="{{ asset('images/different-cisco.png') }}" alt="cisco">
            <img src="{{ asset('images/different-fortinet.png') }}" alt="fortinet">
        </div>
    </div>

    <h2>What makes us different</h2>

    <div class="different-info">
        <style> .image-library {
    position: relative;
    overflow: hidden;
}

.images {
    display: flex;
    gap: 20px;
}

.images img {
    width: 100px;
    animation: bounce 3s ease-in-out infinite;
}

.images img:nth-child(2) {
    animation-delay: 0.5s;
}

.images img:nth-child(3) {
    animation-delay: 1s;
}

.images img:nth-child(4) {
    animation-delay: 1.5s;
}

@keyframes bounce {
    0%, 100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-30px);
    }
}</style>
        <div class="different-image-wrap image-library">

            <div class="different-img img-1 image-collage images">
                <img src="{{ asset('images/info-image.png') }}" alt="Practical training - lab work">
                <img src="{{ asset('images/info-image.png') }}" alt="Practical training - networking gear">
                <img src="{{ asset('images/info-image.png') }}" alt="Practical training - students">
                <img src="{{ asset('images/info-image.png') }}" alt="Practical training - certification">
            </div>

            <img src="{{ asset('images/info-image.png') }}" alt="International standards" class="different-img img-2">
            <img src="{{ asset('images/info-image.png') }}" alt="Certified trainers" class="different-img img-3">
            <img src="{{ asset('images/info-image.png') }}" alt="Internships" class="different-img img-4">
        </div>

        <div class="different-accordion">

            <div class="accordion-item">
                <input type="radio" name="different-accordion" id="acc-1" class="accordion-input" checked>
                <label for="acc-1" class="accordion-header">
                    <i class="bi bi-cpu"></i>
                    <span>100% Practical Training</span>
                </label>
                <div class="accordion-content">
                    <p>Dive straight into hands-on learning with real projects, labs, and scenarios. No heavy theory, just the practical skills you need to succeed in the real world.</p>
                </div>
            </div>

            <div class="accordion-item">
                <input type="radio" name="different-accordion" id="acc-2" class="accordion-input">
                <label for="acc-2" class="accordion-header">
                    <i class="bi bi-globe"></i>
                    <span>International Standards</span>
                </label>
                <div class="accordion-content">
                    <p>Our programs follow globally recognized curricula and best practices, preparing you for international certifications and opportunities anywhere in the world.</p>
                </div>
            </div>

            <div class="accordion-item">
                <input type="radio" name="different-accordion" id="acc-3" class="accordion-input">
                <label for="acc-3" class="accordion-header">
                    <i class="bi bi-mortarboard"></i>
                    <span>Certified & Expert Trainers</span>
                </label>
                <div class="accordion-content">
                    <p>Learn from experienced, certified instructors who are active industry professionals and passionate about transferring real world knowledge.</p>
                </div>
            </div>

            <div class="accordion-item">
                <input type="radio" name="different-accordion" id="acc-4" class="accordion-input">
                <label for="acc-4" class="accordion-header">
                    <i class="bi bi-briefcase"></i>
                    <span>Internships & Recruitment Opportunities</span>
                </label>
                <div class="accordion-content">
                    <p>As a training center founded by active companies working in the field, we offer our students strong opportunities for internships and direct recruitment after training.</p>
                </div>
            </div>

        </div>
    </div>

</section>

<style>
    /* Top: logos strip */
    .different {
        padding: 50px;
    }

    .different-start p {
        text-align: center;
        font-size: 14px;
        color: #3C3C3C;
        padding-bottom: 40px;
    }

    .different-logos {
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin-bottom: 60px;
    }

    .different-logos img {
        height: 40px;
        object-fit: contain;
    }

    /* Bottom: image + accordion row */
    .different-info {
        display: flex;
        gap: 60px;
        align-items: flex-start;
    }

    .different-image-wrap {
        position: relative;
        flex: 0 0 45%;
        aspect-ratio: 4 / 3;
        border: 2px solid #2f6fed;
        border-radius: 8px;
        overflow: hidden;
    }

    .different-img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 0.35s ease;
        background-color: grey;
    }

    .img-1 {
        opacity: 1;
    }

    img.different-img {
        object-fit: cover;
    }

    /* Collage grid — only for img-1 now that it's a div of 4 images */
    .image-collage {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr 1fr;
        gap: 6px;
        padding: 6px;
        box-sizing: border-box;
    }

    .image-collage img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 6px;
        display: block;
    }

    /* Swap active image based on which accordion item is open */
    .different-info:has(#acc-1:checked) .img-1,
    .different-info:has(#acc-2:checked) .img-2,
    .different-info:has(#acc-3:checked) .img-3,
    .different-info:has(#acc-4:checked) .img-4 {
        opacity: 1;
    }

    .different-info:has(#acc-2:checked) .img-1,
    .different-info:has(#acc-3:checked) .img-1,
    .different-info:has(#acc-4:checked) .img-1 {
        opacity: 0;
    }

    /* Accordion */
    .different-accordion {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .accordion-item {
        border-bottom: 1px solid #e5e5e5;
    }

    .accordion-input {
        display: none;
    }

    .accordion-header {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 22px 20px;
        cursor: pointer;
        font-size: 16px;
        font-weight: 600;
        color: #1a1a1a;
    }

    .accordion-header i {
        font-size: 18px;
        color: #2f6fed;
    }

    .accordion-content {
        max-height: 0;
        overflow: hidden;
        opacity: 0;
        padding: 0 20px;
        transition: max-height 0.3s ease, opacity 0.3s ease, padding 0.3s ease;
    }

    .accordion-content p {
        margin: 0 0 20px;
        font-size: 14px;
        line-height: 1.6;
        color: #555;
    }

    .accordion-item:has(.accordion-input:checked) {
        background-color: #f7f8fa;
        border-top: 2px solid #2f6fed;
        border-bottom: none;
        border-radius: 6px;
    }

    .accordion-input:checked ~ .accordion-content {
        max-height: 300px;
        opacity: 1;
        padding: 0 20px 24px;
    }
</style>