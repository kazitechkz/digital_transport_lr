<?php

namespace App\Livewire\CommunicationType;

use App\Http\Requests\CommunicationType\CommunicationTypeUpdateRequest;
use App\Http\Requests\WellsType\WellsTypeUpdateRequest;
use App\Models\BarrierType;
use App\Models\CommunicationType;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public CommunicationType $communicationType;
    #[Validate]
    public $title_ru;
    #[Validate]
    public $title_kk;
    public $title_en;

    public function mount($communicationType)
    {
        $this->communicationType = $communicationType;
        $this->title_ru = $this->communicationType->title_ru;
        $this->title_kk = $this->communicationType->title_kk;
        $this->title_en = $this->communicationType->title_en;
    }

    protected function rules()
    {
        return (new CommunicationTypeUpdateRequest())->rules();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.communication-type.edit');
    }
}
