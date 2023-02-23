<!DOCTYPE html>
<html lang="en">
<x-headercsslink />

<body class="dark-mode">

    <main>
        <section class="min-vh-100 d-flex bg-primary align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 align-items-center text-center">
                        <div class="card bg-primary shadow-inset border-light p-4">
                            <div class="card-body shadow-soft border border-light rounded">
                                <a href="./"><img class="img-fluid w-60"
                                        src="{{ asset('/public/assets/img/illustrations/404.svg') }}"
                                        alt="menuimage" /></a>
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-8">
                                        <h1 class="mt-5 font-weight-light">
                                            Page not
                                            <span class="font-weight-bolder text-dark">found</span>
                                        </h1>
                                        <p class="lead my-4">
                                            Oops! Looks like you followed a bad link. If you think
                                            this is a problem with us, please tell us.
                                        </p>
                                        <a class="btn btn-primary animate-hover" href="./"><i
                                                class="fas fa-chevron-left mr-3 pl-2 animate-left-3"></i>Go back
                                            home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
