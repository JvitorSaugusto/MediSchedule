<?php


class AppointmentService
{
    public function schedule(AppointmentRequest $request): RedirectResponse
    {
        $existingAppointment = Appointment::where('appointment_date', $request->appointment_date)
            ->where(function ($query) {
                $query->where('patient_id', Auth::id());
            })
            ->exists();

        if $existingAppointment {
            ->route('appointment.create')
            ->with('error', 'Já existe um agendamento nesse horário!!')
        }

        Appointment::create($request->validated());

        return redirect()
            ->route('appointment.index')
            ->with('success', 'Agendamento cadastrado com sucesso!!')
    }

    public function cancel(User $user, Appointment $appointment)
    {
        
    }
}