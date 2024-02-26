  
  <!-- Footer -->
  <footer id="footer" class="footer">

    <div class="container">
      @foreach ($contact as $item)
        <div class="row gy-3">
          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-geo-alt icon"></i>
            <div>
              <h4>Endereço</h4>
              <p>
                {{$item->endereco}}
              </p>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-telephone icon"></i>
            <div>
              <h4>Reservas</h4>
              <p>
                <strong>Telefone:  </strong>+244 {{$item->telefone}}<br>
                <strong>Email:  </strong>{{$item->email}}<br>
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-clock icon"></i>
            <div>
              <h4>Hora de Funcionamento</h4>
              <p>
                <strong>{{$item->atendimento}}</strong> 
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Siga-nos</h4>
            <div class="social-links d-flex">
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>

        </div>
      @endforeach
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Fort-Code</span></strong>. Todos direitos reservados
      </div>
    </div>

  </footer>
  <!-- End Footer -->