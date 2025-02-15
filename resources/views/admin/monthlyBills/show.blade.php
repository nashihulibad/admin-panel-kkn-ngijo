@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.monthlyBill.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.monthly-bills.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                     <!--<tr>
                       <th>
                            {{ trans('cruds.monthlyBill.fields.id') }}
                        </th>
                        <td>
                            {{ $monthlyBill->id }}
                        </td>
                    </tr>-->
                    <tr>
                        <th>
                            {{ trans('cruds.monthlyBill.fields.tahun') }}
                        </th>
                        <td>
                            {{ $monthlyBill->tahun }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.monthlyBill.fields.bulan') }}
                        </th>
                        <td>
                            {{ App\Models\MonthlyBill::BULAN_SELECT[$monthlyBill->bulan] ?? '' }}
                        </td>
                    </tr>

                    @foreach ($monthlyBill->monthlyBilltoBill as $itemPivot)
                    <tr>
                        <th>
                            {{ trans('cruds.monthlyBill.fields.iuran') }}
                        </th>
                        <td>
                            {{ $itemPivot->bill->name ?? "" }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.bill.fields.price') }}
                        </th>
                        <td>
                            Rp. {{ $itemPivot->bill->price ?? "" }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection