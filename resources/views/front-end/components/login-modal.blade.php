<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <img class="modal-title" id="loginModalLabel" width="80" height="80" src="asset('img/logo2.png')" alt="">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{url('application')}}" method="get">
                <div class="modal-body">
                    <div class="card card-custom border-0 gutter-b">
                        <div class="card-body p-0">
                            <div class="card-header border-0 ">
                                <div class="card-title">
                                    <h3 class="card-label">
                                        Masuk
                                    </h3>
                                </div>
                            </div>
                            <div class="form-group ">
                                <input type="text" placeholder="Username" class="form-control ">
                            </div>
                            <div class="form-group ">
                                <input type="password" placeholder="Password" class="form-control ">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-block font-weight-bold">Masuk</button>
                </div>
            </form>
        </div>
    </div>