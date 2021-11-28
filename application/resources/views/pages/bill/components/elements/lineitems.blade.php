@foreach($lineitems as $lineitem)
<tr>
    <!--description-->
    <td class="x-description text-wrap-new-lines">
       <div> {{explode('&$;', $lineitem->lineitem_description ?? '&$;&$;&$;1')[0] }}
       {{ explode('&$;', $lineitem->lineitem_description ?? '&$;&$;&$;1')[1] == ''?'' : 'Material: ' . explode('&$;', $lineitem->lineitem_description ?? '&$;&$;&$;1')[1]}}
       {{ explode('&$;', $lineitem->lineitem_description ?? '&$;&$;&$;1')[2] == ''?'' : 'Description: ' . explode('&$;', $lineitem->lineitem_description ?? '&$;&$;&$;1')[2]}}
        </div>     
    </td>
    <!--quantity-->
    @if($lineitem->lineitem_type == 'plain')
    <td class="x-quantity">{{ $lineitem->lineitem_quantity }}</td>
    @else
    <td class="x-quantity">
        @if($lineitem->lineitem_time_hours > 0)
        {{ $lineitem->lineitem_time_hours }}{{ strtolower(__('lang.hrs')) }}&nbsp;
        @endif
        @if($lineitem->lineitem_time_minutes > 0)
        {{ $lineitem->lineitem_time_minutes }}{{ strtolower(__('lang.mins')) }} 
        @endif
    </td>
    @endif
    <!--unit price-->
    <td class="x-unit">
    {{ (isset($lineitem->lineitem_unit) && $lineitem->lineitem_unit == '0x0' && isset($lineitem->lineitem_total) && $lineitem->lineitem_total > 0) ? ' ' : 'Height: ' . explode('x', $lineitem->lineitem_unit ?? '0x0')[0]  . ' mm'}}
    {{ (isset($lineitem->lineitem_unit) && $lineitem->lineitem_unit == '0x0' && isset($lineitem->lineitem_total) && $lineitem->lineitem_total > 0) ? ' ' : 'Width: ' . explode('x', $lineitem->lineitem_unit ?? '0x0')[1]  . ' mm'}}    
    Complexity: {{ (explode('&$;',$lineitem->lineitem_description ?? '&$;&$;&$;1')[3]/10-0.1)*100 }}%

    </td>
    <!--rate-->
    <td class="x-rate">{{ runtimeNumberFormat($lineitem->lineitem_rate) }}</td>
    <!--tax-->
    <td class="x-tax {{ runtimeVisibility('invoice-column-inline-tax', $bill->bill_tax_type) }}"></td>
    <!--total-->
    <td class="x-total text-right">{{ runtimeNumberFormat($lineitem->lineitem_total) }}</td>
</tr>
@endforeach