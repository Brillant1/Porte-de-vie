@extends('front.layouts.template')
@section('content')
<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">

    <div class="row">

        <!-- Article main content -->
        <article class="col-sm-8 maincontent">
            <header class="page-header">
                <h1 class="page-title text-center">LES DIFFERENTE CATÉGORIES DE DONS</h1>
            </header>
            <h2>DÎMES</h2>
            <p><img src="{{ asset('assets/images/dime.jpg') }}" alt="" class="img-rounded pull-right" width="300" > Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.</p>
            <p>Quos, aliquam nam velit impedit minus tenetur beatae voluptas facere sint pariatur! Voluptatibus, quisquam, error, est assumenda corporis inventore illo nesciunt iure aut dolor possimus repellat minima veniam alias eius!</p>
            <h2>LES OFFRANDES</h2>
                <p><img src="{{ asset('assets/images/Offrande.jpg') }}" alt="" class="img-rounded pull-right" width="300"> Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam
                    laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam
                    magnam repudiandae sapiente.</p>
                <p>Quos, aliquam nam velit impedit minus tenetur beatae voluptas facere sint pariatur! Voluptatibus, quisquam, error,
                    est assumenda corporis inventore illo nesciunt iure aut dolor possimus repellat minima veniam alias eius!</p>


            <p>Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
            <h3>SEMENCES</h3>
            <p><img src="{{ asset('assets/images/semence.jpg') }}" alt="" class="img-rounded pull-right" width="300"> Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam
                laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam
                magnam repudiandae sapiente.</p>
            <p>Quos, aliquam nam velit impedit minus tenetur beatae voluptas facere sint pariatur! Voluptatibus, quisquam, error,
                est assumenda corporis inventore illo nesciunt iure aut dolor possimus repellat minima veniam alias eius!</p>


            <h2>PARTENARIAT</h2>
            <p><img src="{{ asset('assets/images/Partenaire.JPG') }}" alt="" class="img-rounded pull-right" width="300"> Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam
                laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam
                magnam repudiandae sapiente.</p>
            <p>Quos, aliquam nam velit impedit minus tenetur beatae voluptas facere sint pariatur! Voluptatibus, quisquam, error,
                est assumenda corporis inventore illo nesciunt iure aut dolor possimus repellat minima veniam alias eius!</p>
                Si vous avez envie d'être en partenariat avec l'église "PORTE DE VIE" veillez cliquer <a href="{{ route('partenaire') }}" >ici </a>pour consulter la liste des differentes catégorie de partenariat

        </article>
        <!-- /Article -->

        <!-- Sidebar -->
        <aside class="col-sm-4 sidebar sidebar-right">

            <div class="widget">

                <ul class="list-unstyled list-spaces">
                    <li><a href="#" class="pay-btn" id="">Payer une dîme</a><br><span class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborum.</span></li>
                    <li><a href="" class="pay-btn">Faire des offrandes</a><br><span class="small text-muted">Suscipit veniam debitis sed ipsam quia magnam eveniet perferendis nisi.</span></li>
                    <li><a href="" class="pay-btn">Donnez une meilleure semence</a><br><span class="small text-muted">Sed, mollitia earum debitis est itaque esse reiciendis amet cupiditate.</span></li>
                    <li><a href="{{ route('partenaire') }}">Demande de partenariat</a><br><span class="small text-muted">Delectus, sapiente illo provident quo aliquam nihil beatae dignissimos itaque.</span></li>
                </ul>
            </div>

        </aside>
        <!-- /Sidebar -->

    </div>
</div>

     <script type="text/javascript">
        FedaPay.init('.pay-btn', {
            public_key: 'pk_live_j_PY-QiIVKuSKYi73s1VcLdH',
            transaction: {
                amount: 100,
                description: 'Acheter mon produit'
            },
            customer: {
                email: 'johndoe@gmail.com',
                lastname: 'Doe',
                firstname: 'John',
            }
        });
    </script>

@endsection
