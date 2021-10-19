<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Textchanger;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "sageadvisory",
            "email" => "admin@sageadvisory.com",
            "password" => Hash::make("sageadvisory"),
            "remembercookie" => "$2y$10$5lY1bxV0jszYUiqixEIrd.768voTr6z7ReoMRrgZVAm3P.oHOhOw2"
        ]);
        Textchanger::create([
            "name" => "aboutus",
            "value" => "<p>Sage advisory thrives to provide you well informed financial solutions. We are here to give you sound advice for your hard earned money. In our never ending fast and dynamic lives, we forget to give time to a very important aspect we make a living for i.e. MONEY! This ignorance costs many of us dearly and more so unkowingly. We carry on through days, weeks, months and years thinking we would make the perfect allocation once we have enough corpus and neither do we reach a definite time nor corpus. The whole crux behind this is that we lack time and planning. We at Sage Advisory give adequate time to your portfolio and meet all your investment needs in different ways so as to give enough time and monitor your portfolio at regular intervals so there is proper allocation of your fund in the best way which can bridge the gap of your lack of time and give the perfect solution to all your financial goals. this is it</p>"
        ]);
        Textchanger::create([
            "name" => "header2",
            "value" => "We help organisations work smarter and grow faster. Reach out to us to build effective organisations, reduce costs, manage risk and regulation and leverage talent."
        ]);
        Textchanger::create([
            "name" => "mainheading2",
            "value" => "Book a free, one-hour consultation to deal with your questions on tax optimisation,<br> financial investments or a business auditing & accounting…"
        ]);
        Textchanger::create([
            "name" => "mainheading1",
            "value" => "Book a free <span>Consultation</span>"
        ]);
        Textchanger::create([
            "name" => "inno1",
            "value" => "Are you an <span>innovation leader</span>"
        ]);
        Textchanger::create([
            "name" => "inno2",
            "value" => "Our research shows that great leaders prioritise innovation to deliver revenue<br>growth which outperforms their peers"
        ]);
        Textchanger::create([
            "name" => "footer2",
            "value" => "'We love the approachable format, and the fact that they chose to feature customers that users can really relate to.Each client story module links to the client's website, Facebook page, and app in both the Android and Apple app stores and sets people up for success.'"
        ]);
        Textchanger::create([
            "name" => "testimonial1",
            "value" => "Shaya Hill"
        ]);
        Textchanger::create([
            "name" => "testimonial2",
            "value" => "Tax Advice"
        ]);
        Textchanger::create([
            "name" => "req1",
            "value" => "Request a call back."
        ]);
        Textchanger::create([
            "name" => "req2",
            "value" => "Would you like to speak to one of our financial advisers? Just submit your contact details and we’ll be in touch shortly. You can also email us if you prefer that type of communication."
        ]);
        Textchanger::create([
            "name" => "solutions",
            "value" => "Sage advisory thrives to provide you well informed financial solutions. We are here to give you sound advice for your hard earned money. In our never ending fast and dynamic lives, we forget to give time to a very important aspect we make a living for i.e. MONEY! This ignorance costs many of us dearly and more so unkowingly. We carry on through days, weeks, months and years thinking we would make the perfect allocation once we have enough corpus and neither do we reach a definite time nor corpus. The whole crux behind this is that we lack time and planning. We at Sage Advisory give adequate time to your portfolio and meet all your investment needs in different ways so as to give enough time and monitor your portfolio at regular intervals so there is proper allocation of your fund in the best way which can bridge the gap of your lack of time and give the perfect solution to all your financial goals."
        ]);

    }
}
