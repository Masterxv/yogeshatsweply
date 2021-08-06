

class DishController extends Controller

{

    use ChefMultiActionTrait;



    public function __construct(LanguageService $LanguageService,CommonDataService $CommonDataService)

    {

      $this->arr_view_data           	= [];

      $this->module_title       		= "menu";

      $this->module_view_folder 		= "chef.dish";

      $this->module_icon        		= "fa fa-cutlery";

      $this->DishModel             	= new DishModel();

      $this->DishRatesModel           = new DishRatesModel(); 

      $this->BaseModel 				= $this->DishModel;

      $this->CategoryModel            = new CategoryModel(); 

      $this->CuisineModel             = new CuisineModel();

      $this->ChefModel                = new ChefModel();

      $this->FoodAttributeModel       = new FoodAttributeModel();

      $this->AdminCommissionModel     = new AdminCommissionModel();

      $this->ModifierNameModel        = new ModifierNameModel();

      $this->ModifierTypeModel        = new ModifierTypeModel();

      $this->ItemModifierModel        = new ItemModifierModel();

      $this->ItemModifierAttributeModel = new ItemModifierAttributeModel();

      $this->ItemImagesModel          = new ItemImagesModel();

      $this->LanguageService          = $LanguageService; 

      $this->CommonDataService        = $CommonDataService; 

      $this->BaseModelName			= 'DishModel';

      $this->chef_panel_slug   		= config('app.project.chef_panel_slug');

      $this->chef_url_path     		= url(config('app.project.chef_panel_slug'));

      $this->module_url_path    		= $this->chef_url_path."/menu";



      $this->dish_base_img_path       = base_path().config('app.project.img_path.dish');

      $this->dish_public_img_path     = url('/').config('app.project.img_path.dish');



      $this->default_food_image       = $this->chef_url_path.'/img/default_food.jpg';

      $this->arr_rates                = $this->CommonDataService->get_currency_rate();



  }



  public function index()

  {

    $this->arr_view_data['page_title']           = translation("manage_dishes");

    $this->arr_view_data['module_title']         = translation('dish');



    $this->arr_view_data['parent_module_icon']   = "icon-home2";

    $this->arr_view_data['parent_module_title']  = translation("dashboard");

    $this->arr_view_data['parent_module_url']    = $this->chef_url_path.'/dashboard';

    $this->arr_view_data['module_icon']          = $this->module_icon;

    $this->arr_view_data['chef_panel_slug']      = $this->chef_panel_slug;

    $this->arr_view_data['module_url_path']      = $this->module_url_path;



    return view($this->module_view_folder.'.index',$this->arr_view_data);

}

public function load_data(Request $request)

{



  $arr_search_column  = $request->input('column_filter');

  $obj_dish           = new DishModel();

  $user     = Sentinel::check();

  $user_id  = isset($user->id)?$user->id:'0';

  $chef     = $this->ChefModel->where('user_id',$user_id)->first();

  $chef_id  = isset($chef->id)?$chef->id:'0';

  $obj_dish = $obj_dish

  ->where('chef_id',$user_id)

  ->orderBy('id','DESC');



  if(isset($arr_search_column) && count($arr_search_column)>0)

  {



    if(isset($arr_search_column['q_name']) && $arr_search_column['q_name']!='')

    {

        $obj_dish = $obj_dish->whereHas('get_translation',function($q)use($arr_search_column){

            $q->WhereRaw("name  LIKE  '%".$arr_search_column['q_name']."%' )");

        });



    }

}





if($obj_dish)

{

    $json_result  = DataTables::of($obj_dish)->make(true);



    $build_result = $json_result->getData();





    if(isset($build_result->data) && sizeof($build_result->data)>0)

    {



        foreach ($build_result->data as $key => $data) 

        {



                    /*if(isset($chef->is_open) && $chef->is_open!='' && $chef->is_open=='1')   

                    {*/

                        if($data->is_active != null && $data->is_active == "0")

                        {

                            /*if($data->is_approved!=null && $data->is_approved=='0')

                            {

                           

                                 $build_status_btn = '<a style="position: relative;" class="tabel-edit-btn un-approved" href="javascript:void(0)" title="'.translation('access_denied').'" ><i class="fa fa-lock" ></i><i class="fa fa-ban fa-stack-2x text-danger"></i></a>';

                            }

                            else

                            {*/



                                $build_status_btn = '<li><a class="tabel-edit-btn" title="'.translation('unlock').'"  href="'.$this->module_url_path.'/activate/'.base64_encode($data->id).'" onclick="return confirm_action(this,event,\'Do you really want to activate this Record ?\')" ><i class="fal fa-unlock"></i> unLock</a></li>';    

                            //}



                            }

                            elseif($data->is_active != null && $data->is_active == "1")

                            {

                            /* if($data->is_approved!=null && $data->is_approved=='0')

                            {

                           

                                 $build_status_btn = '<a style="position: relative;" class="tabel-edit-btn un-approved" href="javascript:void(0)" title="'.translation('access_denied').'" ><i class="fa fa-unlock" ></i><i class="fa fa-ban fa-stack-2x text-danger"></i></a>';

                            }

                            else

                            {*/



                                $build_status_btn = '<li><a class="tabel-edit-btn" title="'.translation('lock').'" href="'.$this->module_url_path.'/deactivate/'.base64_encode($data->id).'" onclick="return confirm_action(this,event,\'Do you really want to inactivate this Record ?\')" ><i class="fal fa-lock"></i> Lock</a></li>';

                            //}

                            }

                   /* }

                    else

                    {

                        if($data->is_active != null && $data->is_active == "0")

                        {

                            $build_status_btn = '<a style="position: relative;" class="tabel-edit-btn un-approved" href="javascript:void(0)" title="'.translation('access_denied').'" ><i class="fa fa-ban" ></i><i class="fa fa-ban fa-stack-2x text-danger"></i></a>';

                        }

                        elseif($data->is_active != null && $data->is_active == "1")

                        {

                            $build_status_btn = '<a style="position: relative;" class="tabel-edit-btn un-approved" href="javascript:void(0)" title="'.translation('access_denied').'" ><i class="fa fa-check" ></i><i class="fa fa-ban fa-stack-2x text-danger"></i></a>';

                        }

                    }*/

                    $view_href     = $this->module_url_path.'/view/'.base64_encode($data->id);



                    $build_view_button   = "<li><a class='tabel-edit-btn' title='".translation('view')."' href='".$view_href."'><i class='fal fa-eye'></i> View</a></li>";



                    $edit_href  = $this->module_url_path.'/edit/'.base64_encode($data->id);



                    $build_edit_button   = "<li><a class='tabel-edit-btn' title='".translation('edit')."' href='".$edit_href."'><i class='fal fa-edit'></i> Edit</a></li>";



                    if($data->is_preferred != null && $data->is_preferred == "0")

                    {   

                        $is_preferred = '<div class="btn btn-default btn-xs no-margin"><i class="fa fa-times"></i> '.translation('no').'</div>';

                    }

                    elseif($data->is_preferred != null && $data->is_preferred == "1")

                    {

                        $is_preferred = '<div class="btn btn-default btn-xs no-margin"><i class="fa fa-check"></i> '.translation('yes').'</div>';

                    }



                    if($data->is_approved != null && $data->is_approved == "0")

                    {   

                        $is_approved = '<div class="btn btn-warning btn-xs no-margin"><i class="fa fa-times"></i> '.translation('no').'</div>';

                    }

                    elseif($data->is_approved != null && $data->is_approved == "1")

                    {

                        $is_approved = '<div class="btn btn-success btn-xs no-margin"><i class="fa fa-check"></i> '.translation('yes').'</div>';

                    } 

                    elseif($data->is_approved != null && $data->is_approved == "2")

                    {

                        $is_approved = '<div class="btn btn-warning btn-xs no-margin"><i class="fa fa-times"></i> '.translation('rejected').'</div>';

                    } 



                    $action_button = $build_edit_button.' '.$build_view_button.' '.$build_status_btn;

                    $id                 = isset($data->id)? base64_encode($data->id) :'';

                    $name               = isset($data->name) ? $data->name :'';

                    $price              = isset($data->price) ? $data->price :'';

                    $daily_quantity     = isset($data->daily_quantity) ? $data->daily_quantity :'';

                    $available_qty      = isset($data->available_qty) ? $data->available_qty :'';

                    $dish_image         = $this->default_food_image;

                    $image              = isset($data->dish_image) && $data->dish_image != ''? explode(',',$data->dish_image)[0]:'';

                    if($image!='' && file_exists($this->dish_base_img_path.$image)){



                        $dish_image = url('/').'/uploads/dish/'.$image;

                    }

                    $dish_image = '<img src="'.$dish_image.'" alt="perling" height="60px" width="60px"/>';

                    $build_result->data[$key]->id                  = $id;

                    $build_result->data[$key]->name                = $name;

                    $build_result->data[$key]->available_qty       = $available_qty;

                    $build_result->data[$key]->image               = $dish_image;

                    $build_result->data[$key]->is_preferred        = $is_preferred;

                    $build_result->data[$key]->is_approved         = $is_approved;

                    $build_result->data[$key]->build_action_button = $action_button;

                }

            }

            return response()->json($build_result);

        }

    }

    public function create()

    {

        $arr_category = $arr_cuisine = $arr_attribute = [];

        $obj_category = $this->CategoryModel->where('is_active','1')->where('domain','CHEF')->where('slug','!=','all')->get();

        if(!$obj_category->isEmpty()){

            $arr_category = $obj_category->toArray(); 

        } 

        $obj_cuisine  = $this->CuisineModel->where('is_active','1')->get(); 

        if(!$obj_cuisine->isEmpty()){

            $arr_cuisine = $obj_cuisine->toArray();   

        }

        $obj_attribute  = $this->FoodAttributeModel->where('is_active','1')->get(); 

        if(!$obj_attribute->isEmpty()){

            $arr_attribute = $obj_attribute->toArray();   

        }

        $chef = get_login_user_details();



        $modifier_obj = $this->ModifierNameModel

        ->where('chef_id' ,$chef['id'])

        ->where('status','1')

        ->get();



        if ($modifier_obj)

        {

           $modifier_arr = $modifier_obj->toArray();

       }



        //dd($arr_category,$arr_cuisine);



       $this->arr_view_data['arr_lang']             = $this->LanguageService->get_all_language();

       $this->arr_view_data['edit_mode']            = TRUE;

       $this->arr_view_data['page_title']           = translation("add")." ".translation('dish');

       $this->arr_view_data['module_title']         = translation('dish');

       $this->arr_view_data['sub_module_icon']      = 'fa fa-plus';

       $this->arr_view_data['parent_module_icon']   = "icon-home2";

       $this->arr_view_data['parent_module_title']  = translation("dashboard");

       $this->arr_view_data['parent_module_url']    = $this->chef_url_path.'/dashboard';

       $this->arr_view_data['module_icon']          = $this->module_icon;

       $this->arr_view_data['chef_panel_slug']      = $this->chef_panel_slug;

       $this->arr_view_data['module_url_path']      = $this->module_url_path;

       $this->arr_view_data['arr_cuisine']          = $arr_cuisine;

       $this->arr_view_data['arr_category']         = $arr_category;    

       $this->arr_view_data['arr_attribute']        = $arr_attribute;

       $this->arr_view_data['arr_rates']            = $this->arr_rates;

       $this->arr_view_data['modifier_arr']         = $modifier_arr;



       return view($this->module_view_folder.'.create',$this->arr_view_data);

   }



   public function store(Request $request) {
    //dd($request->all());    

    $user = Sentinel::check();
    $arr_rules = [];
    $arr_rules['food_type']      = ['required','regex:/^(on_request|instant)$/'];
    $arr_rules['dish_type']      = ['required','regex:/^(veg|non_veg)$/'];
    $arr_rules['preferred_dish'] = ['required','regex:/^(yes|no)$/'];
    $arr_rules['cuisine']        = 'required|numeric';
    $arr_rules['category']       = 'required|numeric';

    // if(isset($amount_arr[0]) && sizeof($amount_arr)>0){
    // }else{
    //    $arr_rules['amount']  = 'numeric|gt:0';
    // }

    /*Yogesh added this code - image uppload
    $arr_data = array();
     $image_file = $request->image;
        list($type, $image_file) = explode(';', $image_file);
        list(, $image_file)      = explode(',', $image_file);
        $image_file = base64_decode($image_file);
        $image_name= time().'_'.rand(100,999).'.png';
       // $path = 'uploads/'.$image_name;
        //$path =   $this->category_image_base_img_path.$image_name;
        $path =   $this->dish_base_img_path.$image_name;
        $abc = file_put_contents($path, $image_file);
        $arr_data['category_image']     = $image_name;
        */

    $arr_modifiers         = $request->input('modifier');
    $arr_modifier_min_size = $request->input('modifier_min_size');
    $arr_modifier_required = $request->input('required');


    if(count(array_unique($arr_modifiers))<count($arr_modifiers)) 
    {  
        Flash::error('Please select any Modifiers only once ! ');
        return redirect()->back();
    }



    if($request->input('modifier_max_size')!='')

    {

        $arr_modifier_max_size = array_values($request->input('modifier_max_size'));

    }



    $arr_lang   =   $this->LanguageService->get_all_language();



    foreach ($arr_lang as $key => $lang) {

        $arr_rules['dish_name_'.$lang['locale']] = 'required';

        $arr_rules['description_'.$lang['locale']] = 'required';

    }   



    $validator = Validator::make($request->all(),$arr_rules);



    if($validator->fails())

    {   

        return redirect()->back()->withErrors($validator)->withInput($request->all());

    }

    $user = Sentinel::check();

    $user_id = isset($user->id)?$user->id:'0';

    $chef = $this->ChefModel->where('user_id',$user_id)->first();

    $chef_id = isset($chef->id)?$chef->id:'0';



    $arr_data                         = [];

    $arr_data['chef_id']              = $user_id;

    $arr_data['dish_category_id']     = $request->category;

    $arr_data['cuisine_id']           = $request->cuisine;

    if($request->food_type=='instant'){

        $arr_data['food_type']            = 'ready_food';

    }

    else{

        $arr_data['food_type']            = 'on_request';

    }

    if($request->dish_type=='veg'){

        $arr_data['dish_type']            = 'VEG';

    }

    else{

        $arr_data['dish_type']            = 'NONVEG';

    }

    if($request->preferred_dish=='yes'){

        $arr_data['is_preferred']            = '1';

    }

    else{

        $arr_data['is_preferred']            = '0';

    }



    $arr_data['daily_quantity']       = $request->daily_qty;

    $arr_data['available_qty']        = $request->daily_qty;

    $arr_data['slug']                 = strslug($request->dish_name_en);

    $arr_data['attribute_id']         = $request->attribute;

    $arr_data['cooking_time_hr']      = $request->cooking_time_hr;

    $arr_data['cooking_time_min']     = $request->cooking_time_min;

    $arr_data['price']                = $request->amount;

    $arr_data['is_active']            = '0';

    $arr_data['is_approved']          = '0';

    $dish_image = $img_name = '';




    $images  = $request->input('file', null);
    if(isset($images) && is_array($images) && sizeof($images)>0)
    { 
        foreach($images as $menuImage)
        {
            $encoded_image = base64_decode($menuImage);
            $ext = explode('/',explode(';', $menuImage)[0])[1];
            $dish_image      = sha1(uniqid().uniqid()) . '.' . $ext;
            $output_file   = $this->dish_base_img_path.$dish_image;
            $status        = base64ToImage($menuImage, $output_file);

            if($status)
            {
                $img_name .=$dish_image.',';
            }

        }

    } 


    $arr_data['dish_image']  = $img_name;

    $obj_dish = $this->BaseModel->create($arr_data);

    $dish_id = isset($obj_dish->id)?$obj_dish->id:'0';



    $arr_size              = $request->size_arr;

    $arr_price             = $request->amount_arr;



//dd($arr_size);
    if(isset($arr_size[0]) && sizeof($arr_size)>0)
    {
        foreach($arr_size as $key=>$size)

        {

            $arr_data=[];

            $arr_data['dish_id']          = $dish_id;

            $arr_data['quantity']         = $size;

            $arr_data['price_per_unit']   = round($arr_price[$key],2);

            $arr_data['chef_price']       = round($arr_price[$key],2);

            $arr_data['admin_commission'] = '0';

            $this->DishRatesModel->create($arr_data);

        }
        $min_price = min($arr_price);

        $arr_temp['price'] = $min_price;
        $this->BaseModel->where('id',$dish_id)->update($arr_temp);

    }

    if(isset($arr_modifiers['0']) && sizeof($arr_modifiers)>0)

    {

        foreach ($arr_modifiers as $key => $value)

        {   

            $arr_modifiers_detail['modifier_id']       = $value;

            $arr_modifiers_detail['item_id']           = $dish_id;

            $arr_modifiers_detail['modifier_min_size'] = $arr_modifier_min_size[$key];

            $arr_modifiers_detail['is_required']       = $arr_modifier_required[$key];



            $obj = $this->ItemModifierModel->create($arr_modifiers_detail);



            $item_modifier_id = $obj->id;





            if(isset($arr_modifier_max_size[$key]) && $arr_modifier_max_size[$key]!='')

            {

                foreach ($arr_modifier_max_size[$key] as $inner_key => $val) 

                {

                    $arr_modifiers_attribute_detail['modifier_attribute_id'] = isset($val)?$val:'';

                    $arr_modifiers_attribute_detail['item_modifier_id']  = $item_modifier_id;



                    if(isset($val) && $val!='')

                    {

                     $this->ItemModifierAttributeModel->create($arr_modifiers_attribute_detail);

                 }

             }                  

         }

     }

 }



        /*$arr_images = [];



            if(isset($images) && is_array($images) && sizeof($images)>0)

            {

                foreach($images as $menuImage)

                {

                    $encoded_image = base64_decode($menuImage);

                    $ext = explode('/',explode(';', $menuImage)[0])[1];

                    $filename      = sha1(uniqid().uniqid()) . '.' . $ext;

                    $output_file   = $this->menu_image_base_img_path.$filename;

                    $status        = base64ToImage($menuImage, $output_file);



                    if($status)

                    {

                        array_push($arr_images, $filename);

                    }



                    // $ext           = strtolower($menuImage->getClientOriginalExtension());

                    // $filename      = time().uniqid().'.'.$ext;

                    // $output_file   = $menuImage->move($this->menu_image_base_img_path,$filename);

                    // if($output_file)

                    // {

                    //     array_push($arr_images, $filename);

                    // }

                }

            }



            if(isset($arr_images) && sizeof($arr_images)>0)

            {

                foreach ($arr_images as $key => $value) 

                {

                    $arr_create  = [];

                    $arr_create  = array('item_id'=>$item_id,

                                        'image'=>$value);

                    $this->ItemImagesModel->create($arr_create);

                }

            }

            */

            if($obj_dish)

            {

                if(sizeof($arr_lang) > 0 )

                {  

                    foreach ($arr_lang as $lang) 

                    {            

                        $dish_name   = $request->input('dish_name_'.$lang['locale']);

                        $description = $request->input('description_'.$lang['locale']);

                        if(isset($dish_name) && $dish_name != '')

                        {  

                            $translation = $obj_dish->translateOrNew($lang['locale']);

                            $translation->name            = trim($dish_name);

                            $translation->description     = trim($description);

                            $translation->dish_id         = $dish_id;

                            $translation->save();

                        }

                    }

                } 

                else

                {

                    Flash::error(translation('problem_occured_while_creating_dish'));

                }

                /*send database notification to admin*/

                $arr_notification_data                 = [];

                $arr_notification_data['from_user_id'] = isset($user_id) ? $user_id : 0;

                $arr_notification_data['to_user_id']   = 1;

                $arr_notification_data['type']         = 'New Dish Added';

                $arr_notification_data['title']        = 'New Dish Added';

                $arr_notification_data['description']  = 'Chef '.(isset($user->first_name) ? ucwords($user->first_name) : '-').' '.(isset($user->last_name) ? ucwords($user->last_name) : '-').' added new dish '.$request->input('dish_name_en');

                $arr_notification_data['link']         = 'admin/dish';

                $arr_notification_data['domain']       = 'CHEF';

                $arr_notification_data['user_type']    = 'ADMIN';

                $arr_notification_data['url_id']       = 0;

                $arr_notification_data['slug']         = 'dish_listing';



                NotificationsModel::create($arr_notification_data);



                /*-------------------------------------------------------------------------------------------*/

            }

            Flash::success(translation('dish_added_successfully'));

            return redirect($this->module_url_path);

        }

        public function edit($enc_id)

        {

            if($enc_id){

                $id = base64_decode($enc_id);



                $user = Sentinel::check();

                $user_id = isset($user->id)?$user->id:'0';



                if(is_numeric($id)){

                    $obj_data = $this->BaseModel->with(['get_translations','get_rates','get_modifier'=>function($q){

                        $q->with('modifier_type_details');

                        $q->with('modifier_name_details');

                        $q->with(['modifier_attribute_details'=>function($qq){

                            $qq->with('modifier_name_details');

                        }]);

                    }])

                    ->where('id',$id)

                    ->first();

                    if(isset($obj_data->id)){

                    $arr_data = $obj_data->toArray(); //dd($arr_data);

                    $arr_category = $arr_cuisine = $arr_attribute = [];

                    $obj_category = $this->CategoryModel->where('is_active','1')->where('domain','CHEF')->where('slug','!=','all')->get();

                    if(!$obj_category->isEmpty()){

                        $arr_category = $obj_category->toArray(); 

                    } 

                    $obj_cuisine  = $this->CuisineModel->where('is_active','1')->get(); 

                    if(!$obj_cuisine->isEmpty()){

                        $arr_cuisine = $obj_cuisine->toArray();   

                    }

                    $obj_attribute  = $this->FoodAttributeModel->where('is_active','1')->get(); 

                    if(!$obj_attribute->isEmpty()){

                        $arr_attribute = $obj_attribute->toArray();   

                    }



                    $modifier_obj = $this->ModifierNameModel

                    ->where('chef_id' ,$user_id)

                    ->where('status','1')

                    ->get();



                    if($modifier_obj)

                    {

                     $modifier_arr = $modifier_obj->toArray();

                 }

                       //dd($modifier_arr,$arr_data,$arr_category,$arr_cuisine);

                 $this->arr_view_data['arr_lang']             = $this->LanguageService->get_all_language();

                 $this->arr_view_data['edit_mode']            = TRUE;

                 $this->arr_view_data['page_title']           = translation("update")." ".translation('dish');

                 $this->arr_view_data['module_title']         = translation('dish');

                 $this->arr_view_data['sub_module_icon']      = 'fa fa-edit';

                 $this->arr_view_data['parent_module_icon']   = "icon-home2";

                 $this->arr_view_data['parent_module_title']  = "Dashboard";

                 $this->arr_view_data['parent_module_url']    = $this->chef_url_path.'/dashboard';

                 $this->arr_view_data['module_icon']          = $this->module_icon;

                 $this->arr_view_data['chef_panel_slug']      = $this->chef_panel_slug;

                 $this->arr_view_data['module_url_path']      = $this->module_url_path;

                 $this->arr_view_data['arr_cuisine']          = $arr_cuisine;

                 $this->arr_view_data['arr_category']         = $arr_category;    

                 $this->arr_view_data['arr_attribute']        = $arr_attribute;

                 $this->arr_view_data['arr_data']             = $arr_data;

                 $this->arr_view_data['enc_id']               = $enc_id;

                 $this->arr_view_data['dish_base_img_path']   = $this->dish_base_img_path;

                 $this->arr_view_data['dish_public_img_path'] = $this->dish_public_img_path;

                 $this->arr_view_data['arr_rates']            = $this->arr_rates;

                        $this->arr_view_data['modifier_arr']         = $modifier_arr;//dd($arr_data);



                        return view($this->module_view_folder.'.edit',$this->arr_view_data);

                    }

                }   

            }

            Flash::error(translation('something_went_wrong'));

            return redirect();         

        }



        public function update($enc_id,Request $request)

        {

        //dd($request->all());

            if(isset($enc_id)){

                $id = base64_decode($enc_id);

                if(is_numeric($id)){

                    $obj_data = $this->BaseModel->with('get_translations','get_rates')->where('id',$id)->first();

                    if(isset($obj_data->id)){

                        $user = Sentinel::check();

                        $arr_rules = [];

                        $arr_rules['food_type']      = ['required','regex:/^(on_request|instant)$/'];

                        $arr_rules['dish_type']      = ['required','regex:/^(VEG|NONVEG)$/'];

                    //$arr_rules['dish_category']  = 'required|numeric';

                        $arr_rules['preferred_dish'] = ['required','regex:/^(yes|no)$/'];

                    //$arr_rules['cuisine']        = 'required|numeric';

                    /*$arr_rules['daily_quantity'] = 'required|numeric';

                    $arr_rules['attribute']      = 'required';*/

                    /*if($request->food_type=='on_request')

                    {

                         $arr_rules['cooking_time_hr']    = 'required|numeric';

                         $arr_rules['cooking_time_min']    = 'required|numeric';

                     }*/



                     $arr_lang   =   $this->LanguageService->get_all_language();

                     foreach ($arr_lang as $key => $lang) {

                        $arr_rules['dish_name_'.$lang['locale']] = 'required';

                        $arr_rules['description_'.$lang['locale']] = 'required';

                    } 

                    

                    $validator = Validator::make($request->all(),$arr_rules);

                    if($validator->fails())

                    {   

                        return redirect()->back()->withErrors($validator)->withInput($request->all());

                    }

                    $user_id = isset($user->id)?$user->id:'0';

                    $chef = $this->ChefModel->where('user_id',$user_id)->first();

                    $chef_id = isset($chef->id)?$chef->id:'0';



                    $arr_data                         = [];

                    $arr_data['chef_id']              = $user_id;

                    $arr_data['daily_quantity']       = $request->daily_qty;

                    $arr_data['available_qty']        = $request->daily_qty;

                   /* $arr_data['dish_category_id']     = $request->dish_category;

                   $arr_data['cuisine_id']           = $request->cuisine;*/



                   if($request->food_type=='instant'){

                    $arr_data['food_type']            = 'ready_food';

                }

                else{

                    $arr_data['food_type']            = 'on_request';

                }

                /*if($request->dish_type=='veg'){*/

                    $arr_data['dish_type']            = $request->dish_type;

                    /*}

                    else{

                        $arr_data['dish_type']            = 'NONVEG';

                    }*/

                    if($request->preferred_dish=='yes'){

                        $arr_data['is_preferred']            = '1';

                    }

                    else{

                        $arr_data['is_preferred']            = '0';

                    }



                    //$arr_data['daily_quantity']   = $request->daily_quantity;

                    //$arr_data['available_qty']    = $request->daily_quantity;

                    $arr_data['slug']             = strslug($request->dish_name_en);

                   /* $arr_data['attribute_id']     = $request->attribute;

                    $arr_data['cooking_time_hr']  = $request->cooking_time_hr;

                    $arr_data['cooking_time_min'] = $request->cooking_time_min;*/

                    /*

                    if($obj_data->food_type != $arr_data['food_type']){

                        $arr_data['is_approved']  = '0';

                    }

                    else if($obj_data->dish_type != $arr_data['dish_type']){

                        $arr_data['is_approved']  = '0';

                    }

                    else if($obj_data->is_preferred != $arr_data['is_preferred']){

                        $arr_data['is_approved']  = '0';

                    }

                    else if($obj_data->dish_category_id != $arr_data['dish_category_id']){

                        $arr_data['is_approved']  = '0';

                    }

                    else if($obj_data->cuisine_id != $arr_data['cuisine_id']){

                        $arr_data['is_approved']  = '0';

                    }

                    else if($obj_data->slug != $arr_data['slug']){

                        $arr_data['is_approved']  = '0';

                    }

                    else if($obj_data->attribute_id != $arr_data['attribute_id']){

                        $arr_data['is_approved']  = '0';

                    }

                    else if($obj_data->cooking_time_hr != $arr_data['cooking_time_hr']){

                        $arr_data['is_approved']  = '0';

                    }

                    else if($obj_data->cooking_time_min != $arr_data['cooking_time_min']){

                        $arr_data['is_approved']  = '0';

                    }

                    else{

                        $arr_data['is_approved']  = '1';   

                    }



                    if($obj_data->is_approved=='0'){

                        $arr_data['is_approved']  = '0';   

                    }*/

                    $arr_data['is_approved']  = '0';

                    $arr_data['is_active']  = '1';   
                    
                    $arr_data['price']     = $request->amount;

                    $dish_image = $img_name = '';
                    
                    $images     = $request->input('file','');

                    if(isset($images) && is_array($images) && sizeof($images)>0)
                    {
                        if(isset($arr_menu['images_details']) && $arr_menu['images_details']!=null)
                        {
                            foreach ($arr_menu['images_details'] as $key => $old_image) 
                            {
                                @unlink($this->dish_base_img_path.$old_image['image']);
                            }
                            $this->ItemImagesModel->where('item_id', $obj_data->id)->delete();
                        }
                        foreach($images as $menuImage)
                        {
                            $encoded_image = base64_decode($menuImage);
                            //dd($encoded_image);
                            $ext = explode('/',explode(';', $menuImage)[0])[1];
                            
                            $dish_image      = sha1(uniqid().uniqid()) . '.' . $ext;
                            
                            $output_file   = $this->dish_base_img_path.$dish_image;
                            $status        = base64ToImage($menuImage, $output_file);

                            if($status)
                            {
                                $img_name .=$dish_image.',';
                            }
                        }
                        $arr_data['dish_image']  = $img_name;
                    }  

                    $obj_dish = $this->BaseModel->where('id',$id)->update($arr_data);
                    



                    if($arr_data['is_approved']=='0')

                    {

                        /**** Send notification*********/

                        $name  = $request->input('dish_name_en');

                        $data   =   [];

                        $data['from_user_id']    =   $user_id;

                        $data['to_user_id']      =   1;

                        $data['type']            =   'dish Approval.';

                        $data['title']           =   'dish approval';

                        $data['description']     =   'dish updated by '.$name.' need approval from you';

                        $data['link']            =   'admin/dish';

                        $data['domain']          =   'CHEF';

                        $data['user_type']       =   'ADMIN';



                        NotificationsModel::create($data);

                        /**** Send notification*********/

                    }

                    $this->DishRatesModel->where('dish_id',$id)->delete();



                    $arr_size = $request->size_arr;

                    $arr_price = $request->amount_arr;


                    if(isset($arr_size[0]) && sizeof($arr_size)>0)
                    {
                        foreach($arr_size as $key=>$size)

                        {

                            $arr_data=[];

                            $arr_data['dish_id']          = $id;

                            $arr_data['quantity']         = $size;

                            $arr_data['price_per_unit']   = round($arr_price[$key],2);

                            $arr_data['chef_price']       = round($arr_price[$key],2);

                            $arr_data['admin_commission'] = '0';

                            $this->DishRatesModel->create($arr_data);

                        }
                        $min_price = min($arr_price);

                        $arr_temp['price'] = $min_price;
                        // hide by yogesh
                        //$this->MenuItemModel->where('id',$dish_id)->update($arr_temp);
                        $this->BaseModel->where('id',$id)->update($arr_temp);

                    }


                    $arr_modifiers         = $request->input('modifier');



                    if(isset($arr_modifiers) && $arr_modifiers!='')

                    {

                      $arr_modifiers = array_values($request->input('modifier'));

                  }



                  if($request->input('modifier_max_size')!='')

                  {

                    $arr_modifier_max_size = array_values($request->input('modifier_max_size'));

                }



                    //dd($arr_modifier_max_size);



                $arr_modifier_min_size = $request->input('modifier_min_size');

                $arr_modifier_required = $request->input('required');

                if(isset($arr_modifiers['0']) && sizeof($arr_modifiers)>0)

                {



                    $obj_item_del = $this->ItemModifierModel->where('item_id', $id)->get();



                    if($obj_item_del)

                    {

                        $arr_item_del_ids = $arr_item_del = [];



                        $arr_item_del  = $obj_item_del->toArray();



                        foreach ($arr_item_del as $key => $in_value)

                        {

                          $arr_item_del = $in_value['id'];



                          array_push($arr_item_del_ids, $arr_item_del);

                      }

                  }





                  $this->ItemModifierModel->where('item_id', $id)->delete();

                  $this->ItemModifierAttributeModel->whereIn('item_modifier_id', $arr_item_del_ids)->delete();



                  foreach ($arr_modifiers as $key => $value)

                  {   

                    $arr_modifiers_detail['modifier_id']       = $value;

                    $arr_modifiers_detail['item_id']           = $id;

                    $arr_modifiers_detail['modifier_min_size'] = isset($arr_modifier_min_size[$key])?$arr_modifier_min_size[$key]:'0';

                    $arr_modifiers_detail['is_required']       = isset($arr_modifier_required[$key])?$arr_modifier_required[$key]:'0';



                    $obj = $this->ItemModifierModel->create($arr_modifiers_detail);



                    $item_modifier_id = $obj->id;





                    if(isset($arr_modifier_max_size[$key]) && $arr_modifier_max_size[$key]!='')

                    {

                        foreach ($arr_modifier_max_size[$key] as $inner_key => $val) 

                        {

                            $arr_modifiers_attribute_detail['modifier_attribute_id'] = isset($val)?$val:'';

                            $arr_modifiers_attribute_detail['item_modifier_id']  = $item_modifier_id;



                            if(isset($val) && $val!='')

                            {

                             $this->ItemModifierAttributeModel->create($arr_modifiers_attribute_detail);



                         }

                     }                  

                 }



             }

                            // dd('stop');

         }

         $obj_dish         =    $this->BaseModel->where('id',$id)->first();

         $form_data        =    $request->all();

         $dish_id          =    $id;

         if($obj_dish)

         {

            if(sizeof($arr_lang) > 0 )

            {  

                foreach ($arr_lang as $lang) 

                {            

                    $dish_name   = $request->input('dish_name_'.$lang['locale']);

                    $description = $request->input('description_'.$lang['locale']);

                    if(isset($dish_name) && $dish_name != '')

                    {  

                        $translation = $obj_dish->translateOrNew($lang['locale']);

                        $translation->name            = trim($dish_name);

                        $translation->description     = trim($description);

                        $translation->dish_id         = $dish_id;

                        $translation->save();



                    }

                }

            } 

            else

            {

                Flash::error(translation('problem_occured_while_updating_dish'));

            }

        }

        Flash::success(translation('dish_updated_successfully'));

        return redirect()->back();

    }

}        

}

Flash::error(translation('something_went_wrong'));

return redirect($this->module_url_path);

}

public function view($enc_id=FALSE)

{

    if($enc_id)

    {

        $id = base64_decode($enc_id);

        if(is_numeric($id)){

            $obj_data = $this->BaseModel->with('get_rates','get_attribute','get_dish_category','get_cuisine','get_translations')->where('id',$id)->first();

            if(isset($obj_data->id)){

                $arr_data = $obj_data->toArray();

                $chef = $this->ChefModel->with('get_category')->where('user_id',$arr_data['chef_id'])->get();



                $this->arr_view_data['page_title']            = translation("view")." ".translation('dish');

                $this->arr_view_data['module_title']          = translation('dish');

                $this->arr_view_data['parent_module_icon']    = "icon-home2";

                $this->arr_view_data['sub_module_icon']       = 'fa fa-eye';

                $this->arr_view_data['parent_module_title']   = translation("dashboard");

                $this->arr_view_data['parent_module_url']     = $this->chef_url_path.'/dashboard';

                $this->arr_view_data['module_icon']           = $this->module_icon;

                $this->arr_view_data['chef_panel_slug']       = $this->chef_panel_slug;

                $this->arr_view_data['module_url_path']       = $this->module_url_path;

                $this->arr_view_data['arr_data']              = $arr_data;

                $this->arr_view_data['arr_dish_images']       = isset($arr_data['dish_image'])?explode(',',$arr_data['dish_image']):'';

                $this->arr_view_data['default_food_image']    = $this->default_food_image;

                $this->arr_view_data['chef']                  = $chef;

                $this->arr_view_data['dish_base_img_path']    = $this->dish_base_img_path;

                $this->arr_view_data['dish_public_img_path']  = $this->dish_public_img_path;

                return view($this->module_view_folder.'.view',$this->arr_view_data);

            }

        }

    }

    Flash::error(translation('something_went_wrong_please_try_again'));

    return redirect()->back();         

}

public function preferred_dish(Request $request){

    $user = Sentinel::check();

    $user_id = isset($user->id)?$user->id:'0';

    $chef = $this->ChefModel->where('user_id',$user_id)->first();

    $chef_id = isset($chef->id)?$chef->id:'0';

    $count = $this->DishModel->where('chef_id',$chef_id)->where('is_preferred',1)->count();

    return $count;

}  



public function update_and_activate(Request $request)              

{



    $id = 0;

    $id = base64_decode($request->dish_id);



    if(!is_numeric($id))

    {

        Flash::error(translation('something_went_wrong'));

        return redirect($this->module_url_path);

    }



    $user     = Sentinel::check();

    $user_id  = isset($user->id)?$user->id:'0';



    $obj_dish = DishModel::where('chef_id',$user_id)

    ->where('is_active','0')

    ->where('is_approved','1')

    ->count();



    $arr_data = [];

    $arr_data['daily_quantity']     =   trim($request->daily_qty);

    $arr_data['available_qty']      =   trim($request->daily_qty);

    $arr_data['is_active']          =   '1';



    $update_data = DishModel::where('id',$id)->update($arr_data);

    if($update_data)

    {

        Flash::success(translation('daily_quantity_updated_successfully'));

    }

    else

    {

        Flash::error(translation('problem_occured_while_updating_daily_quantity'));

    }



        /*if(isset($obj_dish) && $obj_dish==1)

        {

            return redirect(url('/').'/'.config('app.project.chef_panel_slug').'/business_setup');    

        }

        else

        {*/

            return redirect()->back();   

       // }



        }



        public function get_modifiers(Request $request)

        {

            $arr_modifiers = [];



            $id            = $request->input('id');

            $modifier_id   = $request->input('modifier_id');



            $obj_modifiers = $this->ModifierTypeModel

            ->where('modifire_name_id',$id)

            ->get();



            if($obj_modifiers)

            {

                $arr_modifiers = $obj_modifiers->toArray();

            }



        // if(isset($arr_modifiers) && sizeof($arr_modifiers)>0)

        // {

        //     $arr_response['status']         = 'success';

        //     $arr_response['arr_modifiers']  = $arr_modifiers;



        //     return $arr_response;

        // }



            if(isset($arr_modifiers) && sizeof($arr_modifiers)>0)

            {

            //dd($arr_modifiers);

                $html ='<select class="form-control" name="modifier_max_size['.$modifier_id.'][]" id="modifier_max_size'.$modifier_id.'" data-id="'.$modifier_id.'" multiple data-style="form-control" data-rule-required="true" onchange="return maxQuantity(this);">';







                foreach ($arr_modifiers as $key => $value) 

                {

                    $html.= '<option value="'.$value['id'].'">'.$value['name'].'</option>';

                }

                $html.='</select>';



                $arr_response['status'] = 'success';

                $arr_response['data']   = $html;

                return $arr_response;

            }



            $html ='<select class="form-control" name="modifier_max_size[]" id="modifier_max_size'.$modifier_id.'" multiple data-style="form-control" data-rule-required="true">';

            $html.='</select>';



            $arr_response['status'] = 'error';

            $arr_response['data']   = $html;

            return $arr_response;

        }

    }