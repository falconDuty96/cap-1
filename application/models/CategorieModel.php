<?php

    class CategorieModel extends CI_Model {
        public function registerCategorie($data) {
            $this->db->insert('categorie', $data);
        }
        public function getAllCategorie() {
            $query = $this->db->get('categorie');
            return $query->result() ;
        }
        public function deleteCategorie($id) {
            $this->db->where('categorie_id', $id);
            $this->db->delete('categorie');
        }

        public function updateCategorie($nom, $id) {
            $data = array(
                'categorie_nom' => $nom,
            );
            
            $this->db->where('categorie_id', $id);
            $this->db->update('categorie', $data);
        }
    }