<section class="module module-parallax bg-light-30"
         style="background-image: url('{{ \App\Http\Controllers\ImageManagerController::getPublicImageUrl($category->image) }}')">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="mh-line-size-3 font-alt m-b-20">{{ $category->category }}</h1>
            </div>
        </div>
    </div>
</section>