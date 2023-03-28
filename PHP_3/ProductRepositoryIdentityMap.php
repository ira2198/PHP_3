<?php
declare(strict_types = 1);

namespace Model\Repository;

use Model\ Entity;

class Product
{
    private $productMap = [];


    /**
 * Поиск продуктов по массиву id
     *
 * @param int[] $ids
 * @return Entity\Product[]
     */

    public function searchMap(array $ids = [])
    {
        if (!count($ids)) {
            return [];
        } 

        $productList = [];

        foreach ($ids as $id){
            $key = sprintf('%s.%d', new Entity\Product, $id);
            if (isset($this->productMap[$key])) {
                return $productList[] = $this->productMap[$key];
            }
        }
        foreach ($this->getDataFromSource(['id' => $ids]) as $item) {
            $productList[] = new Entity\Product($item['id'], $item['name'], $item['price']);

            $key =  getGlobalKey(get_class($item), $item['id']);
            array_push($productMap[$key], new Entity\Product($item['id'], $item['name'], $item['price']));
        }
        
        return $productList;
    }


    /**
     * Получаем все продукты
     *
     * @return Entity\Product[]
     */
    public function fetchAll(): array
    {
        $productList = [];
        foreach ($this->getDataFromSource() as $item) {
            $newObject == new Entity\Product($item['id'], $item['name'], $item['price']);
            $key =  getGlobalKey(get_class($item), $item['id']);

            if(isset($this->productMap[$key])){
                $productList[] = $item;

            } else {                
                $productList[] = $newObject;
                $key = getGlobalKey(get_class($item), $item['id']);
                $productMap[$key] = $newObject;
            }
    }

        return $productList;
    }



    /**
     * Источник данных
     *
     * @param array $search
     *
     * @return array
     */
    private function getDataFromSource(array $search = [])
    {
        $dataSource = [
            [
                'id' => 1,
                'name' => 'PHP',
                'price' => 15300,
            ],
            [
                'id' => 2,
                'name' => 'Python',
                'price' => 20400,
            ],
            [
                'id' => 3,
                'name' => 'C#',
                'price' => 30100,
            ],
            [
                'id' => 4,
                'name' => 'Java',
                'price' => 30600,
            ],
            [
                'id' => 5,
                'name' => 'Ruby',
                'price' => 18600,
            ],
            [
                'id' => 8,
                'name' => 'Delphi',
                'price' => 8400,
            ],
            [
                'id' => 9,
                'name' => 'C++',
                'price' => 19300,
            ],
            [
                'id' => 10,
                'name' => 'C',
                'price' => 12800,
            ],
            [
                'id' => 11,
                'name' => 'Lua',
                'price' => 5000,
            ],
        ];

        if (!count($search)) {
            return $dataSource;
        }

        $productFilter = function (array $dataSource) use ($search): bool {
            return in_array($dataSource[key($search)], current($search), true);
        };

        return array_filter($dataSource, $productFilter);
    }

    private function getGlobalKey(string $classname, int $id)
    {
        return sprintf('%s.%d', $classname, $id);
    } 
}
