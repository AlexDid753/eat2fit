<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class EatingController extends \LaravelAdmin\Controllers\BaseAdminController
{
    public function update(Request $request, $id)
    {
        $model = $this->model::findOrFail($id);
        $model->eating_type_id = $request->eating_type_id;
        $model->day_id = $request->day_id;

        $dishes_sync_data = []; //Массив в который добавляем данные по синхронизации связей
        foreach (explode(',',$request['dishes-select-ids']) as $key => $dish_id) {
            // Полученные из скрытого инпута ids в заданном порядке берем и указываем им параметр sort
            // При синхронизации связи в таблице укажется параметр sort
            $dishes_sync_data[intval($dish_id)] = ['sort' => $key];
        }
        $model->dishes()->sync($dishes_sync_data);
        $model->save();

        return redirect($this->redirectTo);
    }
}
