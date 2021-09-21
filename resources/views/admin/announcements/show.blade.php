@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.announcement.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.announcements.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <!--<tr>
                        <th>
                            {{ trans('cruds.announcement.fields.id') }}
                        </th>
                        <td>
                            {{ $announcement->id }}
                        </td>
                    </tr>-->
                    <tr>
                        <th>
                            {{ trans('cruds.announcement.fields.tittle') }}
                        </th>
                        <td>
                            {{ $announcement->tittle }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.announcement.fields.date') }}
                        </th>
                        <th>
                            
                        </th>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.announcement.fields.content') }}
                        </th>
                        <td>
                            {!! $announcement->content !!}
                        </td>
                    </tr>
                    @if (Auth::user()->scope_id != null)    
                        <tr>
                            <th>
                                {{ trans('cruds.bill.fields.scope') }} 
                            </th>
                            <td>
                                {{-- Masukan, kayaknya lebih enak kalau pengumumannya dibentuk seperti article???? --}}
                                {{ $announcement->scope->name ?? "" }}
                            </td>
                        </tr>
                    @endif
                    <tr>
                        <th>
                            {{ trans('cruds.announcement.fields.attachment') }}
                        </th>
                        <td>
                            @foreach($announcement->attachment as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection