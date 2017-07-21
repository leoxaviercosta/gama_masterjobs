@extends('template')

@section('content')
    
    <div>
        <div class="progress">
            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="{{round($leads['leads']->total()*100/1000,0)}}" aria-valuemin="0" aria-valuemax="100" style="width: {{round($leads['leads']->total()*100/1000,0)}}%">
                <span class="sr-only">{{ round($leads['leads']->total()*100/1000,0) }} alcançado | {{ $leads['leads']->total() }} / 1000</span>
            </div>
        </div>
    </div>
    
    <!--<h1>Leads ({{ $leads['leads']->total() }} de 1000 convertidos)</h1>-->

    <ul class="nav nav-tabs">
      <li class="nav-item active">
        <a class="nav-link active" data-toggle="tab" href="#leads" style="color: #777777">Leads</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#localizacao" style="color: #777777">Estatística por Localização</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#stacks" style="color: #777777">Estatística por Stack</a>
      </li>
    </ul>

    <div class="tab-content">
        <div id="leads" class="tab-pane fade in active">
            <table class="table">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Stack</th>
                    <th>Endereço IPV4</th>
                    <th>Localização IP</th>
                    <th>Incluído em</th>
                </tr>

                @foreach($leads['leads'] as $lead)
                    <tr>
                        <td>{{ $lead->name }}</td>
                        <td>{{ $lead->email }}</td>
                        <td>{{ $lead->stack }}</td>
                        <td>{{ $lead->ipv4_address }}</td>
                        <td>{{ $lead->ip_location }}</td>
                        <td>{{ $lead->created_at }}</td>
                    </tr>
                @endforeach

            </table>

            <!-- Adicionado paginação -->
            {!! $leads['leads']->render() !!}
        </div>
        <div id="localizacao" class="tab-pane fade">
            <table class="table">
                <tr>
                    <th>Estado</th>
                    <th>Total</th>
                </tr>

                @foreach($leads['localizacao'] as $localizacao)
                    <tr>
                        <td>{!! $localizacao->LOCATION !!}</td>
                        <td>{{ $localizacao->COUNT }}</td>
                    </tr>
                @endforeach

            </table>
        </div>
        <div id="stacks" class="tab-pane fade">
          <table class="table">
              <tr>
                  <th>Stack</th>
                  <th>Total</th>
              </tr>

              @foreach($leads['stacks'] as $stack)
                  <tr>
                      <td>{!! $stack->STACK !!}</td>
                      <td>{{ $stack->COUNT }}</td>
                  </tr>
              @endforeach

          </table>
        </div>
    </div>
@endsection