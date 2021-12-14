<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Pesanan') }}
        </h2>
        <h5>{{ __('Detail pesanan orang') }}</h5>
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="card-body">
                <a href="#" class="btn btn-primary btn-icon icon-left btn-lg btn-block mb-4 d-md-none" data-toggle-slide="#ticket-items">
                  <i class="fas fa-list"></i> All Tickets
                </a>
                <div class="tickets">
                  <div class="ticket-items" id="ticket-items">
                    <div class="ticket-item active">
                      <div class="ticket-title">
                        <h4>Technical problem</h4>
                      </div>
                      <div class="ticket-desc">
                        <div>Farhan A. Mujib</div>
                        <div class="bullet"></div>
                        <div>2 min ago</div>
                      </div>
                    </div>
                    <div class="ticket-item">
                      <div class="ticket-title">
                        <h4>Cancel my order please!</h4>
                      </div>
                      <div class="ticket-desc">
                        <div>Amanda Aprilia Azmi</div>
                        <div class="bullet"></div>
                        <div>Yesterday</div>
                      </div>
                    </div>
                    <div class="ticket-item">
                      <div class="ticket-title">
                        <h4>Where is my mother?</h4>
                      </div>
                      <div class="ticket-desc">
                        <div>Irwansyah Saputra</div>
                        <div class="bullet"></div>
                        <div>July 18, 2018</div>
                      </div>
                    </div>
                  </div>
                  <div class="ticket-content">
                    <div class="ticket-header">
                      <div class="ticket-sender-picture img-shadow">
                        <img src="assets/img/avatar/avatar-5.png" alt="image">
                      </div>
                      <div class="ticket-detail">
                        <div class="ticket-title">
                          <h4>Technical Problem</h4>
                        </div>
                        <div class="ticket-info">
                          <div class="font-weight-600">Farhan A. Mujib</div>
                          <div class="bullet"></div>
                          <div class="text-primary font-weight-600">2 min ago</div>
                        </div>
                      </div>
                    </div>
                    <div class="ticket-description">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    
                      <div class="gallery">
                        <div class="gallery-item" data-image="assets/img/news/img01.jpg" data-title="Image 1" href="assets/img/news/img01.jpg" title="Image 1" style="background-image: url(&quot;assets/img/news/img01.jpg&quot;);"></div>
                        <div class="gallery-item" data-image="assets/img/news/img02.jpg" data-title="Image 2" href="assets/img/news/img02.jpg" title="Image 2" style="background-image: url(&quot;assets/img/news/img02.jpg&quot;);"></div>
                        <div class="gallery-item" data-image="assets/img/news/img03.jpg" data-title="Image 3" href="assets/img/news/img03.jpg" title="Image 3" style="background-image: url(&quot;assets/img/news/img03.jpg&quot;);"></div>
                        <div class="gallery-item gallery-more" data-image="assets/img/news/img04.jpg" data-title="Image 4" href="assets/img/news/img04.jpg" title="Image 4" style="background-image: url(&quot;assets/img/news/img04.jpg&quot;);">
                        </div>
                      </div>
    
                      <div class="ticket-divider"></div>
    
                    </div>
                  </div>
                </div>
              </div>
    
        </div>
    </div>

    

    

    
</x-app-layout>
