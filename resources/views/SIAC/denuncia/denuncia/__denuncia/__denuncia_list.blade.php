<div class="row" style="width: 100% !important;">
    <div class="col-lg-12">

        <table  id="tblCat" class="table table-bordered table-striped dt-responsive dataTable " role="grid" aria-describedby="datatable-buttons_info"  width="100%">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" aria-sort="ascending" aria-label="Name: activate to sort column descending">ID</th>
                    <th class="sorting">Ciudadano</th>
                    <th class="sorting">Fecha</th>
                    <th class="sorting">Área</th>
{{--                    <th class="sorting">Resp.</th>--}}
{{--                    <th class="sorting">Estatus</th>--}}
{{--                    <th class="sorting">CURP Ciudadano</th>--}}
                    <th class="sorting">Servicio</th>
                    <th class="sorting ">Ubicación</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

            @foreach($items as $item)
                <tr class="@if($item->cerrado) bg-coral-denuncia-cerrada @endif">
                    <td class="table-user">{{$item->id}}</td>
                    <td class="w-25">
                        {{$item->ciudadano->FullName}} <br>
                        <small>{{$item->ciudadano->curp}}</small>
                    </td>
                    <td  class="w-15">{{($item->fecha_ingreso)}}</td>
                    <td><a title="{{($item->dependencia->dependencia)}}">{{($item->dependencia->abreviatura)}}</a></td>
{{--                    <td>{{($item->TotalRespuestas)}}</td>--}}
{{--                    <td>{{( $item->ultimo_estatus )}}</td>--}}
{{--                    <td>{{($item->ciudadano->curp)}}</td>--}}

                    <td class="w-25">
                        {{($item->servicio->servicio)}}<br>
                        <small class="text-gray-lighter">{{( $item->ultimo_estatus )}}</small>
                        @if( $item->TotalRespuestas>0 )
                            > <small class="text-danger"><strong> {{( $item->TotalRespuestas )}}</strong></small>
                        @endif
                    </td>

                    <td class="w-25">{{$item->fullUbication}} @if($item->ciudadanos->count() > 1)<span class="text-danger">( <i class="fas fa-users"></i> <strong>  {{$item->ciudadanos->count()}} </strong> )</span> @endif
                    </td>
                    <td class="table-action w-15">
                        <div class="button-list">
                            @if($item->cerrado == false && $item->firmado == false)
                                @include('shared.ui_kit.__remove_item')
                                @include('shared.ui_kit.__imagenes_list_item')
                                @if( \Illuminate\Support\Facades\Auth::user()->isPermission('rsd_sas|consultar|all') )
                                    @include('shared.ui_kit.__edit_denuncia_dependencia_servicio_item')
                                @endif
                            @endif
                            @if( ($item->cerrado == false && $item->firmado == false) &&
                                 auth()->user()->can('elimina_denuncia_general') )
                                @include('shared.ui_kit.__remove_item')
                            @endif
                            @include('shared.ui_kit.__add_user_item')
                            @include('shared.ui_kit.__edit_item')
                            @include('shared.ui_kit.__print_denuncia_item')
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>
