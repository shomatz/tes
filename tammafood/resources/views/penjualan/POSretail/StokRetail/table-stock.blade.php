<div class="table-responsive no-padding">       
 <table class="table tabelan table-bordered no-padding" id="data4">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Item</th>
              <th>Tipe Item</th>
              <th>Group Item</th>
              <th>Harga Jual</th>
              <th>Stock</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($stock as $index=> $data)
            <tr>
              <td>{{   ($stock->currentpage()-1) * $stock->perpage() + $index + 1  }}</td>
              <td>{{ $data->i_name }}</td>
              <td>
                    @if($data->i_type=='BJ')
                    Barang Jual
                    @elseif($data->i_type=='BP')
                    Barang Produksi
                    @endif
              </td>
              <td>{{ $data->i_group }}</td>
              <td>Rp.
                  <span class="pull-right">
                    {{ number_format($data->i_price,2,',','.')}}</td>
                  </div>
              <td>
                  <span class="pull-right">
                    @if($data->s_qty=='')
                      0
                    @else
                      {{$data->s_qty}}
                    @endif
                  </span>
              </td>
              <td>
                <div class="btn-group">
                <button class="btn btn-warning btn-sm btn-flat fa fa-edit"
                    id="{{ $data->i_id }}"
                    data-toggle="modal" data-target="#edit_stock" 
                    data-stock="{{ $data->s_qty=='' ? 0 : $data->s_qty}}" 
                    data-id="{{ $data->i_id }}"
                    data-name="{{ $data->i_name }}">
                </button>
                </div>
              </td>
            </tr> 
            @endforeach
          </tbody>
</table>
<div id="c" class="pull-right">
{{$stock->links()}}
</div>
</div>

