<?php

namespace Litecms;

use DB;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    public function run()
    {
        DB::table(config('litecms.service.service.model.table'))->insert([
            [
                'id'        => '1',
                'title'      => 'WEB DESIGNING',
                'icon'       => null, 'heading' => null, 'description' => 'Zoom Infotech a company offering services on various platforms concerning your web presence was conceptualized by a zealous entrepreneur in year 2006. We at Zoom Infotech are very much concerned on delivering our customers the most creative and result driven websites.
We are completely aware of your needs and our potentials of delivering you the best of what you deserve.

We specialize in services which include web development, designing & maintenance, website redesigning, web programming, e-Commerce solutions and online marketing for businesses.

Designers at Zoom Infotech design a website that help you in gaining a brand name as design is the only thing that transforms your conceptual ideas into a visual reality.

Design must have a purpose and we here are passionately focused on embodying the intersection of design, technology, content, and marketing with the help of which organizations achieve core business goals using the digital space. We design and build websites to impact sales, advocacy, and lead generation.

Our Websites are Relevant and Optimized; this helps the brand to have a primary interface with their customer that means their website being the primary salesperson acts proficiently in bringing the brand the value.

Website can give the Brand an edge in the market.

Websites must be built with careful consideration of SEO, social sharing, content strategy, marketing automation, dynamic personalization, lead scoring, and progressive profiling.

Considering all these and the fact that “NO CHALLENGE IS TOO BIG, AND, NO DETAIL IS TOO SMALL” our proficient designers and developers take care of all the minute details that help creating a brand of values.

We at Zoom Infotech help brands use the digital space to engage prospects, customers, leads and advocates.',
                'image'      => '[{"title":"Web design","caption":"Web design","url":"Web design","desc":null,"folder":"2018\\/10\\/10\\/072928838\\/image","time":"2018-10-10 07:30:27","path":"service\\/service\\/2018\\/10\\/10\\/072928838\\/image\\/web-design.png","file":"web-design.png"}]',
                'slug'       => 'web-designing',
                'created_at' => '2018-10-10 03:34:36',
                'updated_at' => '2018-10-10 07:34:36',
                'deleted_at' => null,
            ],
            [
                'id'         => '2',
                'title'      => 'WEB DEVELOPMENT',
                'icon'       => null, 'heading' => null, 'description' => 'Our Development team is fully efficient in the latest technologies up in the market and concerning your every detail as major they hold up to the mark of giving you what you desire and visualize a proper platform.
Developing any web space is easy but developing the one which can help a brand gain value is a work of full dedication, enthusiasm and passion.

We at Zoom Infotech a company offering services on various platforms concerning your web presence conceptualized by a zealous entrepreneur in year 2006, are very much concerned on delivering our customers the most creative, relevant, organized, optimized and result driven websites.

We at Zoom Infotech have an attitude which tells us

“NO CHALLENGE IS TOO BIG, AND, NO DETAIL IS TOO SMALL”.

Our Development team is fully efficient in the latest technologies up in the market and concerning your every detail as major they hold up to the mark of giving you what you desire and visualize a proper platform.

Development of a web space should not only have the feature of looking good but also work efficiently and act as a growth engine, powering lead generation and sales nurturing.

Our development team analyses your requirements and as per your requirement offers you 100% unique solution which will be tailored to meet your exact requirements.

Our developers have a neat and clean, systemized and organized coding under W3C standards.Websites must be built with careful consideration of SEO, social sharing, content strategy, marketing automation, dynamic personalization, lead scoring, and progressive profiling.

Why Us?',
                'image'      => '[{"title":"11111111","caption":"11111111","url":"11111111","desc":null,"folder":"2018\\/10\\/10\\/073040787\\/image","time":"2018-10-10 07:31:35","path":"service\\/service\\/2018\\/10\\/10\\/073040787\\/image\\/11111111.png","file":"11111111.png"}]',
                'slug'       => 'web-development',
                'created_at' => '2018-10-10 03:35:09',
                'updated_at' => '2018-10-10 07:35:09',
                'deleted_at' => null,
            ],
            [
                'id'         => '3',
                'title'      => 'APPS DEVELOPMENT',
                'icon'       => null, 'heading' => null, 'description' => 'Mobile market is strong today and developing an app, gives an easy way to showcase one’s products or services to their customers. Whenever customers want, they can just use it as a one-stop point to get all the information they need.
Mobile Application Development is an area that goes beyond the creation of convincing user interface.

We at Zoom Infotech a company offering services on various platforms concerning your web presence conceptualized by a zealous entrepreneur in year 2006, are very much concerned on delivering our customers the most creative, relevant, organized, optimized and result driven Mobile App.

The development of Mobile App includes various stages such as testing, integration, security, quality assurance, regular management of content and specialized engineering capabilities across various platforms.

We at Zoom Infotech have comprehensive services which provide all this on both, the customer and the firm side.

Our Development team analyses your requirements and through our best strategic insight in this particular area we ensure the use of right choice of right methodology. Right Methodology of development is analyzing your exact requirement and by precise development and specific engagement presenting you what exactly you desired for.

Mobile App Development across noticeable platforms allows organizations a strategic advantage which includes converting the board-room ideas into technical reality.

We for Mobile App Development follow an optimized approach which includes data-driven decision making which would help us in analyzing your needs and with the help of which we can bring your thoughts to the Technical World in which your mobile app would be just a click away from the user and thereby giving you a chance for creating a brand of values.',
                'image'      => '[{"title":"App","caption":"App","url":"App","desc":null,"folder":"2018\\/10\\/10\\/073142632\\/image","time":"2018-10-10 07:32:04","path":"service\\/service\\/2018\\/10\\/10\\/073142632\\/image\\/app.png","file":"app.png"}]',
                'slug'       => 'apps-development',
                'created_at' => '2018-10-10 03:32:52',
                'updated_at' => '2018-10-10 07:32:52',
                'deleted_at' => null
            ],
        ]);

        DB::table('permissions')->insert([
            [
                'slug' => 'service.service.view',
                'name' => 'View Service',
            ],
            [
                'slug' => 'service.service.create',
                'name' => 'Create Service',
            ],
            [
                'slug' => 'service.service.edit',
                'name' => 'Update Service',
            ],
            [
                'slug' => 'service.service.delete',
                'name' => 'Delete Service',
            ],

        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/service/service',
                'name'        => 'Service',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/service/service',
                'name'        => 'Service',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'service',
                'name'        => 'Service',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
        [
        'pacakge'   => 'Service',
        'module'    => 'Service',
        'user_type' => null,
        'user_id'   => null,
        'key'       => 'service.service.key',
        'name'      => 'Some name',
        'value'     => 'Some value',
        'type'      => 'Default',
        'control'   => 'text',
        ],
         */
        ]);
    }
}
