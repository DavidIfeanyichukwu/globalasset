@php
    $user = Illuminate\Support\Facades\Auth::User();
    $dataTypeContent = new App\User;
    $dataTypeProject = $dataTypeContent::find($user->id)->examdpis()->latest()->get();
@endphp


<div class="col-md-12">
    <div class="panel panel-bordered">
        <div class="panel-body">
            <div class="table-responsive">
                <table id="dataTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>Text</th> 
                            <th style="text-align:right">PDF</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dataTypeProject as $data)
                        <tr>
                            <td class="no-sort no-click">
                                <h4>{{ $data->test_house }}</h4> 
                            </td>
                            <td style="text-align:right">
                                <a class="btn btn-primary" href="{{ App\Pdf::dlPdfUrl($data->id) }}">
                                    PDF
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
   