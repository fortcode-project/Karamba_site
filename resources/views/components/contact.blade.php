 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Contacto</h2>
        <p>Precisa de ajuda <span>Contacte-nos</span></p>
      </div>

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

      <form action="" method="post" role="form" class="php-email-form p-3 p-md-4">
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
  </section>
  <!-- End Contact Section -->