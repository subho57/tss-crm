<!--EACH LINE ITEM X-->
<tr class="billing-line-item" id="lineitem_{{ $lineitem->lineitem_id ?? '' }}" type="plain">
    <!--action-->
    <td class="td-action list-table-action x-action bill_col_action">
        <button type="button" title="{{ cleanLang(__('lang.delete')) }}"
            class="data-toggle-tooltip btn btn-outline-danger btn-circle btn-sm js-billing-line-item-delete">
            <i class="sl-icon-trash"></i>
        </button>
    </td>
    <!--description-->
    <td class="form-group x-description bill_col_description">
        <div class="input-group input-group-sm m-b-4">
        <input type="text" class="form-control form-control-sm js_item_product js_line_validation_item" placeholder="Product Name"
            name="js_item_product[{{ $lineitem->lineitem_id ?? '' }}]" value="{{ explode('&$;', $lineitem->lineitem_description ?? ' &$; ')[0] }}" >
        </div>
        <div class="input-group input-group-sm m-b-4">
        <span class="input-group-addon" id="fx-line-item-hrs" >Material</span>
        <input type="text" class="form-control form-control-sm js_item_variation js_line_validation_item" placeholder="Material"
            name="js_item_variation[{{ $lineitem->lineitem_id ?? '' }}]" value="{{ explode('&$;', $lineitem->lineitem_description ?? ' &$; ')[1] }}" >
        </div>
        <div class="input-group input-group-sm">
        <textarea class="form-control form-control-sm js_item_description js_line_validation_item" rows="4" placeholder="Description"
            name="js_item_description[{{ $lineitem->lineitem_id ?? '' }}]">{{ explode('&$;', $lineitem->lineitem_description ?? ' &$; &$; ')[2] }}</textarea>
        </div>
    </td>
    <!--category-->
    <!-- <td class="form-group x-category bill_col_quantity">
        <input class="form-control form-control-sm js_item_category calculation-element js_line_validation_item"
            type="number" step="1" name="js_item_category[{{ $lineitem->lineitem_id ?? '' }}]"
            value="{{ $lineitem->lineitem_category ?? '' }}">
    </td>  -->
    <!--quantity-->
    <td class="form-group x-quantity bill_col_quantity">
        <input class="form-control form-control-sm js_item_quantity calculation-element js_line_validation_item"
            type="number" step="1" name="js_item_quantity[{{ $lineitem->lineitem_id ?? '' }}]"
            value="{{  $lineitem->lineitem_quantity ?? '' }}">
    </td>
    <!--unit-->
    <!--  $lineitem->lineitem_unit -->
    <td class="form-group x-unit bill_col_unit">
        <!--height-->
        <div class="input-group input-group-sm m-b-4 static-class {{ (isset($lineitem->lineitem_unit) && isset($lineitem->lineitem_total) && $lineitem->lineitem_unit == '0x0' && $lineitem->lineitem_total > 0) ? 'd-none' : '' }}">
            <span class="input-group-addon" id="fx-line-item-hrs" >{{ cleanLang(__('lang.units_height')) }}<small>(in mm)</small></span>
            <input type="number" class="form-control js_item_unit_height calculation-element js_line_validation_item {{ (isset($lineitem->lineitem_unit) && isset($lineitem->lineitem_total) && $lineitem->lineitem_unit == '0x0' && $lineitem->lineitem_total > 0) ? 'd-none' : '' }}" name="js_item_unit_height[{{ $lineitem->lineitem_id ?? '' }}]"
             value="{{  explode('x', $lineitem->lineitem_unit ?? '0x0')[0] }}">
        </div>
        <!--width-->
        <div class="input-group input-group-sm  static-class {{ (isset($lineitem->lineitem_unit) && isset($lineitem->lineitem_total) && $lineitem->lineitem_unit == '0x0' && $lineitem->lineitem_total > 0) ? 'd-none' : '' }}">
            <span class="input-group-addon" id="fx-line-item-min">{{ cleanLang(__('lang.units_width')) }}<small>(in mm)</small></span>
            <input type="number" class="form-control js_item_unit_width calculation-element js_line_validation_item {{ (isset($lineitem->lineitem_unit) && isset($lineitem->lineitem_total) && $lineitem->lineitem_unit == '0x0' && $lineitem->lineitem_total > 0) ? 'd-none' : '' }}" name="js_item_unit_width[{{ $lineitem->lineitem_id ?? '' }}]" 
            value="{{ explode('x', $lineitem->lineitem_unit ?? '0x0')[1] }}">
        </div>
        {{-- <input class="form-control form-control-sm js_item_unit js_line_validation_item" type="text"
            name="js_item_unit[{{ $lineitem->lineitem_id ?? '' }}]" value="{{ $lineitem->lineitem_unit ?? '' }}"> --}}
    </td>
    <!--rate-->
    <td class="form-group x-price bill_col_quantity">
        <input
            class="form-control form-control-sm js_item_rate calculation-element decimal-field js_line_validation_item"
            type="number" step="1" name="js_item_rate[{{ $lineitem->lineitem_id ?? '' }}]"
            value="{{ $lineitem->lineitem_rate ?? '' }}">
    </td>
    <!--tax-->
    <td
        class="bill_col_tax form-group x-tax {{ runtimeVisibility('invoice-column-inline-tax', $bill->bill_tax_type) }} ">
        <select name="js_linetax_rate[{{ $lineitem->lineitem_id ?? '' }}]"
            class="form-control form-control-sm select2-x js_linetax_rate">
            <option value="10">GST(10%)</option>
            <option value="15">Sales tax (15%)</option>
            <option value="20">Income Tax (20%)</option>
        </select>
        <input type="number" class="js_linetax_total" name="js_linetax_rate[{{ $lineitem->lineitem_id ?? '' }}]" value="0">
    </td>
    <!--total-->
    <td class="form-group x-total" id="bill_col_total">
        <input class="form-control form-control-sm js_item_total decimal-field" type="number" step="0.01"
            name="js_item_total[{{ $lineitem->lineitem_id ?? '' }}]" value="{{ $lineitem->lineitem_total ?? '' }}" disabled>
    </td>

    <!--linked items-->
    <input type="hidden" class="js_item_linked_type"
        data-duplicate-check="{{ $lineitem->lineitemresource_linked_type ?? '' }}|{{ $lineitem->lineitemresource_linked_id ?? '' }}"
        name="js_item_linked_type[{{ $lineitem->lineitem_id ?? '' }}]"
        value="{{ $lineitem->lineitemresource_linked_type ?? '' }}">
    <input type="hidden" class="js_item_linked_id" name="js_item_linked_id[{{ $lineitem->lineitem_id ?? '' }}]"
        value="{{ $lineitem->lineitemresource_linked_id ?? '' }}">
    <input type="hidden" class="js_item_type" name="js_item_type[{{ $lineitem->lineitem_id ?? '' }}]" value="plain">

    <!--line item type-->
    <input type="hidden" class="js_item_type" name="js_item_type[{{ $lineitem->lineitem_id ?? '' }}]" value="plain">

</tr>
<!--/#EACH LINE ITEM-->
