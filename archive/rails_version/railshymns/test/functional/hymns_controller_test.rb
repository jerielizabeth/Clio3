require 'test_helper'

class HymnsControllerTest < ActionController::TestCase
  setup do
    @hymn = hymns(:one)
  end

  test "should get index" do
    get :index
    assert_response :success
    assert_not_nil assigns(:hymns)
  end

  test "should get new" do
    get :new
    assert_response :success
  end

  test "should create hymn" do
    assert_difference('Hymn.count') do
      post :create, hymn: { birthYear: @hymn.birthYear, deathYear: @hymn.deathYear, gender: @hymn.gender, personName: @hymn.personName }
    end

    assert_redirected_to hymn_path(assigns(:hymn))
  end

  test "should show hymn" do
    get :show, id: @hymn
    assert_response :success
  end

  test "should get edit" do
    get :edit, id: @hymn
    assert_response :success
  end

  test "should update hymn" do
    put :update, id: @hymn, hymn: { birthYear: @hymn.birthYear, deathYear: @hymn.deathYear, gender: @hymn.gender, personName: @hymn.personName }
    assert_redirected_to hymn_path(assigns(:hymn))
  end

  test "should destroy hymn" do
    assert_difference('Hymn.count', -1) do
      delete :destroy, id: @hymn
    end

    assert_redirected_to hymns_path
  end
end
