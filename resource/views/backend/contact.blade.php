@extends('backend.layout.app')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Mesajlar</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th width="150">Adı Soyadı</th>
                                                    <th width="150">Mail Adresi</th>
                                                    <th>Mesajı</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($contacts as $contact)
                                                    <tr>
                                                        <td>{{ $contact->name_surname }}</td>
                                                        <td>{{ $contact->email }}</td>
                                                        <td>{{ $contact->message }}</td>
                                                    </tr>
                                                    @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


@push('js')
    <script>
        $().DataTable();
    </script>
@endpush
