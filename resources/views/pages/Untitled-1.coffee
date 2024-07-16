@if(isset($item->delivery))
              <h2 class="text-center">Detalhes da Encomenda</h2>
              <ul>
                <li>Referência: {{ $item->delivery->reference }}</li>
                <li>Cliente: {{ $item->delivery->client }}</li>
                <li>Email: {{ $item->delivery->email }}</li>
                <li>Telefone: {{ $item->delivery->phone }}</li>
                <li>Taxa Pb: {{ $item->delivery->taxPb }}</li>
                <li>Desconto: {{ $item->delivery->discount }}</li>
                <li>Total: {{ $item->delivery->total }}</li>
                <li>Estado: {{ $item->delivery->status }}</li>
                <li>Pagamento: {{ $item->delivery->isPaid }}</li>
                <li>Data: {{ $item->delivery->date }}</li>
              </ul>
            @else
              <div class="text-center" style="margin-top: 5rem;">
                <h1 class="text-danger">Código de Encomenda Inválido</h1>
              </div>
            @endif