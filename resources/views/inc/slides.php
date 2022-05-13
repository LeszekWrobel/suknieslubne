<!-- slider   -->
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @for ($i = 0; $i < (count($files)); $i++)
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$i}}" class="active" aria-current="true" aria-label="Slide {{$i}}"></button>
                                    @endfor
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="\images\cristal\Isabelle1.jpg" class="rounded mx-auto d-block" alt="">
                                    </div>
                                    @foreach ($files as $file)
                                    <div class="carousel-item ">
                                        <img src="{{asset('images/cristal/'.$file->getFilename())}}" class="rounded mx-auto d-block" alt="">
                                    </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                                </button>
                            </div>
