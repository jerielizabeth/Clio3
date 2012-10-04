class HymnsController < ApplicationController
  # GET /hymns
  # GET /hymns.json
  def index
    @hymns = Hymn.all

    respond_to do |format|
      format.html # index.html.erb
      format.json { render json: @hymns }
    end
  end

  # GET /hymns/1
  # GET /hymns/1.json
  def show
    @hymn = Hymn.find(params[:id])

    respond_to do |format|
      format.html # show.html.erb
      format.json { render json: @hymn }
    end
  end

  # GET /hymns/new
  # GET /hymns/new.json
  def new
    @hymn = Hymn.new

    respond_to do |format|
      format.html # new.html.erb
      format.json { render json: @hymn }
    end
  end

  # GET /hymns/1/edit
  def edit
    @hymn = Hymn.find(params[:id])
  end

  # POST /hymns
  # POST /hymns.json
  def create
    @hymn = Hymn.new(params[:hymn])

    respond_to do |format|
      if @hymn.save
        format.html { redirect_to @hymn, notice: 'Hymn was successfully created.' }
        format.json { render json: @hymn, status: :created, location: @hymn }
      else
        format.html { render action: "new" }
        format.json { render json: @hymn.errors, status: :unprocessable_entity }
      end
    end
  end

  # PUT /hymns/1
  # PUT /hymns/1.json
  def update
    @hymn = Hymn.find(params[:id])

    respond_to do |format|
      if @hymn.update_attributes(params[:hymn])
        format.html { redirect_to @hymn, notice: 'Hymn was successfully updated.' }
        format.json { head :no_content }
      else
        format.html { render action: "edit" }
        format.json { render json: @hymn.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /hymns/1
  # DELETE /hymns/1.json
  def destroy
    @hymn = Hymn.find(params[:id])
    @hymn.destroy

    respond_to do |format|
      format.html { redirect_to hymns_url }
      format.json { head :no_content }
    end
  end
end
