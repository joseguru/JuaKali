<div class="span3 well">
    <legend>Filter</legend>
    <ul class='categories'>
        <li>{{ HTML::link_to_route('category_message', 'Plumber', array('plumber')) }}</li>
        <li>{{ HTML::link_to_route('category_message', 'Electrician', array('electrician')) }}</li>
        <li>{{ HTML::link_to_route('category_message', 'Builder', array('builder')) }}</li>
        <li>{{ HTML::link_to_route('category_message', 'Farm Manager', array('farm_manager')) }}</li>
    </ul>
</div>