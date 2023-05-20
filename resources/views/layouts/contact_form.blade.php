<section id="contacts-form" class="contacts">
    <div class="container">
        <div class="contacts_wrap">
            <img src="{{asset('assets/images/contacts-s.svg')}}" class="contacts_s" alt="">
            <img src="{{asset('assets/images/particle.svg')}}" class="contacts_particle" alt="">
            <div class="contacts_header">
                <div class="contacts_text">
                    <h2 class="h1">
                        Залишити заявку
                    </h2>
                    <p>
                        Залиште свою заявку і ми з вами зв'яжемося з вами найближчим часом
                    </p>
                </div>
            </div>
            <form class="contacts_form js-contacts-form">
                @csrf
                <div class="contacts_form_wrap fw">
                    <div class="contacts_left">
                        <div class="site-input">
                            <label for="name">Вкажіть своє ім`я*</label>
                            <input id="name" type="text" name="name" autocomplete="off">
                        </div>
                        <div class="site-input">
                            <label for="phone">Вкажіть свій телефон*</label>
                            <input id="phone" type="text" name="phone" autocomplete="off">
                        </div>
                        <div class="site-input">
                            <label for="email">Вкажіть свій e-mail:</label>
                            <input id="email" type="text" name="email" autocomplete="off">
                        </div>
                    </div>
                    <div class="contacts_right">
                        <div class="site-input">
                            <label for="comment">Залиште коментар:</label>
                            <textarea id="comment" type="text" name="comment"></textarea>
                        </div>
                        <div class="contacts_btn">
                            <button class="site-btn">Залишити заявку</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
