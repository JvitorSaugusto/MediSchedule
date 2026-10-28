<?php


class AppointmentService
{
    public function schedule(array $data, int$patientId)
    {
        $existingAppointment = Appointment::where('appointment_date',$data['appointment_date'])
            ->where('patient_id', \$patientId)
            ->exists();

        // 2. Se existir, o Service "grita" um erro (Exception). Ele não redireciona!
        if (\$existingAppointment) {
            throw new Exception('Já existe um agendamento nesse horário!!');
        }

        // 3. Adiciona o patient_id no array de dados antes de criar
        $data['patient_id'] =$patientId;

        // 4. Cria e retorna o agendamento
        return Appointment::create(\$data);
    }

    public function cancel(User $user, Appointment $appointment)
    {
        
    }
}