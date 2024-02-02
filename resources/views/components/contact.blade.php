 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
  <div class="section-header">
    <h2>Contacto</h2>
    <p>Precisa de ajuda <span>Contacte-nos</span></p>
  </div>
    <div class="container d-flex justify-content-between" data-aos="fade-up">
      
      <div class="col-md-6">
  
        @foreach ($contact as $item)
          <div class="row gy-4">
  
            <div class="col-md-6">
              <div class="info-item  d-flex align-items-center">
                <i class="icon bi bi-map flex-shrink-0"></i>
                <div>
                  <h3>Endereço</h3>
                  <div>{{$item->endereco}}</div>
                </div>
              </div>
            </div><!-- End Info Item -->
  
            <div class="col-md-6">
              <div class="info-item d-flex align-items-center">
                <i class="icon bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email</h3>
                  <div>{{$item->email}}</div>
                </div>
              </div>
            </div><!-- End Info Item -->
  
            <div class="col-md-6">
              <div class="info-item  d-flex align-items-center">
                <i class="icon bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Telefone</h3>
                  <div>+244 {{$item->telefone}}</div>
                </div>
              </div>
            </div><!-- End Info Item -->
  
            <div class="col-md-6">
              <div class="info-item  d-flex align-items-center">
                <i class="icon bi bi-share flex-shrink-0"></i>
                <div>
                  <h3>Atendimento</h3>
                  <div>
                    {{$item->atendimento}}
                  </div>
                </div>
              </div>
            </div><!-- End Info Item -->
  
          </div>
        @endforeach
  
        <form action="{{route("site.karamba.send.email")}}" method="post"  class="php-email-form-b p-3 p-md-4">
          @csrf
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto..." required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Mensagem ...." required></textarea>
          </div>
          <div class="text-center"><button type="submit">Enviar</button></div>
        </form><!--End Contact Form -->
      </div>

      <div class="col-md-6 ml-4">
        <iframe class="col" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.4616291283296!2d13.169921175064767!3d-8.929537691127896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a518bcad25c19ef%3A0x1fb540c35f7f342a!2sKaramba!5e0!3m2!1spt-PT!2sao!4v1706795557782!5m2!1spt-PT!2sao" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->