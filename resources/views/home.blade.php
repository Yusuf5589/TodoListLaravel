@extends('layout.layout')


@section('content')

    <div class="w-100 d-flex justify-content-center mt-3">
        <button class="px-5 btn btn-success">Add</button>
    </div>

<div class="w-100 p-0 m-0 mt-3 d-flex justify-content-center flex-column align-items-center row">
    <div class="table-responsive d-flex justify-content-center flex-column align-items-center p-0 m-0 col-12 col-xl-9">
        <table class="table container p-0 m-0">
            <tbody class="row bg-dark p-0 m-0">
                <tr class="row p-0 m-0">
                    <td class="col-3 text-center text-white">Id</td>
                    <td class="col-3 text-center text-white">Name</td>
                    <td class="col-3 text-center text-white">SurName</td>
                    <td class="col-3 text-center text-white">Transactions</td>
                </tr>
            </tbody>
        </table>
        <table class="container p-0 m-0 table">
            <tbody>
                <tr class="row bg-light p-0 m-0">
                    <td class="col-3 text-dark d-flex justify-content-center align-items-center">1</td>
                    <td class="col-3 text-dark d-flex justify-content-center align-items-center">Yusuf</td>
                    <td class="col-3 text-dark d-flex justify-content-center align-items-center">Kapkiner</td>
                    <td class="col-3 text-center text-dark">
                        <button class="btn btn-success px-3">+</button>
                        <button class="btn btn-danger px-3">-</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection