<aside id="secondary" class="widget-area all_side_bar col-lg-4 col-md-12 col-sm-12">
    <div class="service_siderbar side_bar">
        <div class="pd_top_85 mobile_finance-pa"></div>
        <div class="widgets_grid_box">
            <div class="widget creote_widget_service_list">
                <h4 class="widget-title">Financial Services</h4>
                <ul class="service_list_box">
                    <li>
                        <a class="{{ request()->is('financial-services/multi-facetedstyle') ? 'active' : ''}}" href="{{route('multi-facetedstyle')}}">Multi Faceted Style </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('financial-services/capital-raising') ? 'active' : ''}}"  href="{{route('capital-raising')}}">Capital Raising</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('financial-services/privateequity-placement') ? 'active' : ''}}" href="{{route('privateequity-placement')}}">Private Equity Placement</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('financial-services/internationaldebt-solution') ? 'active' : ''}}" href="{{route('internationaldebt-solution')}}">International Debt Solutions</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('financial-services/internationalstructured-solution') ? 'active' : ''}}"  href="{{route('internationalstructured-solution')}}">International Structured Finance Solutions</a> 
                    </li>
                    <li>
                        <a class="{{ request()->is('financial-services/international-m-and-s-services') ? 'active' : ''}}"  href="{{route('international-m-and-s-services')}}">International M & S Services</a> 
                    </li>
                </ul>
            </div>
        </div>
        <div class="pd_bottom_65"></div>
    </div>
</aside>