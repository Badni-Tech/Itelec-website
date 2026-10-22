<section class="trainings">
    <input type="text" placeholder="Search for a training">
    <div class="trainings-items">
        <h1>Categories</h1>
        <span><img src="{{ asset('images/all-trainings.png') }}" alt=""> All trainings <p>#</p></span>
        <span><img src="{{ asset('images/cisco-trainings.png') }}" alt=""> Cisco Systems <p>#</p></span>
        <span><img src="{{ asset('images/ai-trainings.png') }}" alt=""> Artificial Intelligence <p>#</p></span>
        <span><img src="{{ asset('images/microsoft-trainings.png') }}" alt=""> Microsoft Azure <p>#</p></span>
        <span><img src="{{ asset('images/cybersecurity-trainings.png') }}" alt=""></i> Cybersecurity <p>#</p></span>
        <span><img src="{{ asset('images/web-development-different.png') }}" alt=""></i> Web Development <p>#</p></span>

        <span><img src="{{ asset('images/comptia-trainings.png') }}" alt=""> CompTIA <p>#</p></span>
        <span><img src="{{ asset('images/5G-trainings.png') }}" alt=""> Telecommunications <p>#</p></span>
        <span><img src="{{ asset('images/cctv-trainings.png') }}" alt=""> Security Systems <p>#</p></span>
    </div><br>
    <span class="count"># trainings found</span>
    <div class="popular-info trainings-popular">
        <div class="popular-info-item">
            <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
            <span class="popular-sticky-item">cisco</span>
            <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
            <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
            <span class="duration"><i class="bi bi-clock"></i> Duration: 7 days</span><br>
            <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i></a>
        </div>
        <div class="popular-info-item">
            <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
            <span class="popular-sticky-item">cisco</span>
            <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
            <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
            <span class="duration"><i class="bi bi-clock"></i> Duration: 7 days</span><br>
            <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i></a>
        </div>
        <div class="popular-info-item">
            <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
            <span class="popular-sticky-item">cisco</span>
            <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
            <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
            <span class="duration"><i class="bi bi-clock"></i> Duration: 7 days</span><br>
            <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i></a>
        </div>
        <div class="popular-info-item">
            <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
            <span class="popular-sticky-item">cisco</span>
            <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
            <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
            <span class="duration"><i class="bi bi-clock"></i> Duration: 7 days</span><br>
            <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i></a>
        </div>
        <div class="popular-info-item">
            <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
            <span class="popular-sticky-item">cisco</span>
            <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
            <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
            <span class="duration"><i class="bi bi-clock"></i> Duration: 7 days</span><br>
            <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i></a>
        </div>

    </div>
    
</section>

<style>
    .trainings {
        padding: 20px;
        h1{
            display: none;
        }

        input {
            border: 1px solid grey;
            padding: 10px;
            border-radius: 10px;
            width: 90vw;
        }
    }

.trainings-items {
        display: flex;
        gap: 12px 20px; 
        font-size: 13.5px;
        margin-top: 20px;
        overflow-x: auto;   
        img{
            width: 30px;
            margin-right:5px;
        }
        p{
            margin-inline-start: auto;
        }
    }

    .trainings-items > span {
    flex: 0 0 auto;
    white-space: nowrap;
    display: flex;        
    align-items: center;  
    padding: 7px 14px;
    &:hover{
        background-color: #F5F5F5;
    }             
}

    @media (max-width:770px){
        .trainings-popular{
        flex-direction: column!important;
    }
    }
    @media (min-width:771px){
        .trainings-items{
            margin-top: -65px;
            display: flex;
            flex-direction: column;
                padding: 50px;
                height: 100%; 
                width: 350px;
                position: absolute; 
                z-index: 1;
                left: 0;
                overflow-x: hidden; 
                padding-top: 20px;
        }
        .trainings-popular{
            margin-left: 25%;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;  /* packs items to the left, no space distributed between them */
            align-content: flex-start;
            div{
                 flex: 0 0 calc(33.333% - 20px);
            }

        }
        .trainings {
        padding: 20px;
        h1{
            display: block;
            font-size: large;
            font-weight: 600;
        }

        input {
            border: 1px solid grey;
            padding: 10px;
            border-radius: 10px;
            max-width: 40vw;
            margin-left: 25%;
        }
        .count{
            margin-left: 25%;
        }
    }
    
    }
    

</style>


{{-- <div class="sidenav">
    <h2>Categories</h2>
    <a href="#">All Trainings</a>
    <a href="#">Cisco Systems</a>
    <a href="#">CompTIA</a>
    <a href="#">Microsoft Azure</a>
    <a href="#">Cybersecurity</a>
    <a href="#">Web Development</a>
    <a href="#">Artificial Intelligence</a>
    <a href="#">Telecommunications</a>
    <a href="#">Security Systems</a>
</div>
<div class="main">
    <input placeholder="Search for a training" type="text"><br>
    <span># Trainings found</span>
  <div class="popular-info">
        <div class="popular-info-item">
            <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
            <span class="popular-sticky-item">cisco</span>
            <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
            <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
            <span class="duration"><i class="bi bi-clock"></i> Duration: 7 days</span><br>
            <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i></a>
        </div>
        <div class="popular-info-item">
            <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
            <span class="popular-sticky-item">cisco</span>
            <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
            <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
            <span class="duration"><i class="bi bi-clock"></i> Duration: 7 days</span><br>
            <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i></a>
        </div>
        <div class="popular-info-item">
            <img class="popular-item" src="{{ asset('images/popular-image.png') }}" alt="">
            <span class="popular-sticky-item">cisco</span>
            <h3>Getting Started with shadcn/ui: A Complete Guide</h3>
            <p>Whether you want to learn fundamental skills, boost your career with an international certification, or change your career.</p>
            <span class="duration"><i class="bi bi-clock"></i> Duration: 7 days</span><br>
            <a href="{{ url('/') }}">Learn more <i class="bi bi-chevron-right"></i></a>
        </div>

    </div>
</div>


<style>
    .sidenav h2{
        font-size: 25px;
        font-weight: 600;

    }
    .sidenav {
        padding: 50px;
  height: 100%; 
  width: 350px;
  position: absolute; 
  z-index: 1;
  left: 0;
  overflow-x: hidden; 
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 17px;
  color: black;
  display: block;
}

.sidenav a:hover {
  color: black;
}

.main {
  margin-left: 300px;
  padding: 50px;
}
.main input{
    border: black solid 1px;
    padding: 5px 10px 5px 10px;
    border-radius: 5px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style> --}}