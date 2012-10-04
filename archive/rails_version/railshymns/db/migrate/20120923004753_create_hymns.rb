class CreateHymns < ActiveRecord::Migration
  def change
    create_table :hymns do |t|
      t.string :personName
      t.string :gender
      t.string :birthYear
      t.string :deathYear

      t.timestamps
    end
  end
end
